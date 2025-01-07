<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Attribute;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;

class Avatar extends Component
{
    public $name, $avatarImageURL, $avatarUrl;

    #[Locked]
    public User $user;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'avatarUrl' => 'required|url',
        'avatarImageURL' => 'required|url',
    ];

    public function mount()
    {
        $this->user = User::find(Auth::id());
    }

    public function save()
    {
        $this->validate();

        // Download the image and avatar file
        [$imageContents, $imageExtension] = $this->downloadFile($this->avatarImageURL);
        [$fileContents, $fileExtension] = $this->downloadFile($this->avatarUrl);

        // Generate unique filenames
        $imageFilename = $this->generateFilename($imageExtension);
        $fileFilename = $this->generateFilename($fileExtension);

        // Store the files
        $this->storeFile('public/products/' . $imageFilename, $imageContents);
        $this->storeFile('products/' . $fileFilename, $fileContents);

        $category = $this->getOrCreateCategory('avatar', 'Avatars');

        $product = $this->createProduct($category->id);

        // Handle chunked file uploads
        $this->createProductImages($product, $imageFilename, $fileFilename);

        $this->attachRandomTag($product);
        $this->attachRandomAttribute($product);

        $this->user->products()->attach($product);

        $this->reset();

        session()->flash('message', __('Avatar created successfully.'));
    }

    private function downloadFile($url)
    {
        $contents = file_get_contents($url);
        $extension = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION);
        return [$contents, $extension];
    }

    private function generateFilename($extension)
    {
        return Str::random(40) . '.' . $extension;
    }

    private function storeFile($path, $contents)
    {
        Storage::put($path, $contents);
    }

    private function getOrCreateCategory($slug, $name)
    {
        return Category::firstOrCreate(
            ['slug' => $slug],
            ['name' => $name, 'slug' => $slug]
        );
    }

    private function createProduct($categoryId)
    {
        return Product::create([
            'category_id' => $categoryId,
            'sku' => $this->generateSku(),
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'price' => 0,
            'published' => true,
            'created_by' => 'user',
        ]);
    }

    private function createProductImages($product, $imageFilename, $fileFilename)
    {
        $product->images()->create([
            'path' => 'products/' . $imageFilename,
        ]);

        $product->file()->create([
            'name' => $this->name,
            'path' => 'products/' . $fileFilename,
        ]);
    }

    private function attachRandomTag($product)
    {
        $randomTag = Tag::inRandomOrder()->first();
        $product->tags()->attach($randomTag);
    }

    private function attachRandomAttribute($product)
    {
        $randomAttribute = Attribute::inRandomOrder()->first();
        $product->attributes()->attach($randomAttribute, ['value' => 'Custom Value']);
    }

    private function generateSku()
    {
        $lastSku = Product::select('sku')->orderBy('id', 'desc')->first();

        if ($lastSku) {
            $parts = explode('-', $lastSku->sku);
            $lastSku = '3D-rgb-' . ((int)end($parts) + 1);
        } else {
            $lastSku = '3D-rgb-10000';
        }

        return $lastSku;
    }

    #[Title('بارگذاری آواتار')]
    public function render()
    {
        return view('livewire.avatar');
    }
}
