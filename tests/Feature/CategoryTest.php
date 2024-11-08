<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_category()
    {
        dump("Step 1: Creating a new category...");
        $category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category',
            'description' => 'This is a test category.',
        ]);

        dump("Step 2: Verifying category exists in database...");
        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'Test Category',
        ]);
        dump("Category creation test passed.");
    }

    /** @test */
    public function it_retrieves_a_category()
    {
        dump("Step 1: Creating a category to retrieve...");
        $category = Category::create([
            'name' => 'Sample Category',
            'slug' => 'sample-category',
            'description' => 'Sample category description.',
        ]);

        dump("Step 2: Retrieving the category from the database...");
        $retrievedCategory = Category::find($category->id);

        dump("Step 3: Displaying retrieved category details...");
        dump("Name: " . $retrievedCategory->name);
        dump("Slug: " . $retrievedCategory->slug);
        dump("Description: " . $retrievedCategory->description);
        $this->assertEquals('Sample Category', $retrievedCategory->name);
        dump("Category retrieval test passed.");
    }

    /** @test */
    public function it_updates_a_category()
    {
        dump("Step 1: Creating a category to update...");
        $category = Category::create([
            'name' => 'Update Category',
            'slug' => 'update-category',
            'description' => 'Original description.',
        ]);

        dump("Step 2: Updating the category...");
        $category->update(['name' => 'Updated Category', 'description' => 'Updated description']);

        dump("Step 3: Verifying the category update...");
        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'Updated Category',
            'description' => 'Updated description',
        ]);
        dump("Category update test passed.");
    }

    /** @test */
    public function it_deletes_a_category()
    {
        dump("Step 1: Creating a category to delete...");
        $category = Category::create([
            'name' => 'Delete Category',
            'slug' => 'delete-category',
            'description' => 'Category to be deleted.',
        ]);

        dump("Step 2: Deleting the category...");
        $category->delete();

        dump("Step 3: Ensuring category is deleted from database...");
        $this->assertDatabaseMissing('categories', [
            'id' => $category->id,
        ]);
        dump("Category deletion test passed.");
    }

    /** @test */
    public function it_generates_correct_url_for_category()
    {
        dump("Step 1: Creating a parent category...");
        $parentCategory = Category::create(['name' => 'Parent Category', 'slug' => 'parent-category']);

        dump("Step 2: Creating a child category...");
        $childCategory = Category::create([
            'name' => 'Child Category',
            'slug' => 'child-category',
            'parent_id' => $parentCategory->id,
        ]);

        dump("Step 3: Verifying URL generation...");
        $expectedUrl = 'parent-category/child-category';
        $this->assertEquals($expectedUrl, $childCategory->url);
        dump("URL generation test passed.");
    }

    /** @test */
    public function it_generates_breadcrumb_for_category()
    {
        dump("Step 1: Creating a parent category...");
        $parentCategory = Category::create(['name' => 'Parent Category', 'slug' => 'parent-category']);

        dump("Step 2: Creating a child category...");
        $childCategory = Category::create([
            'name' => 'Child Category',
            'slug' => 'child-category',
            'parent_id' => $parentCategory->id,
        ]);

        dump("Step 3: Verifying breadcrumb generation...");
        $expectedBreadcrumb = '<a href="' . url('categories/' . $parentCategory->url) . '">Parent Category</a> / <a href="' . url('categories/' . $childCategory->url) . '">Child Category</a>';
        $this->assertEquals($expectedBreadcrumb, $childCategory->breadcrumb);
        dump("Breadcrumb generation test passed.");
    }
    /** @test */
    public function it_creates_a_parent_category_with_subcategories()
    {
        dump("Step 1: Creating a parent category...");
        $parentCategory = Category::create([
            'name' => 'Parent Category',
            'slug' => 'parent-category',
            'description' => 'This is a parent category.',
        ]);

        dump("Step 2: Creating a subcategory under the parent category...");
        $subCategory = Category::create([
            'name' => 'Subcategory',
            'slug' => 'subcategory',
            'description' => 'This is a subcategory.',
            'parent_id' => $parentCategory->id,
        ]);

        dump("Step 3: Verifying the subcategory exists in the parent category...");
        $this->assertTrue($parentCategory->children->contains($subCategory));
        dump("Parent category with subcategory creation test passed.");
    }

    /** @test */
    public function it_retrieves_subcategories_for_a_parent_category()
    {
        dump("Step 1: Creating a parent category with multiple subcategories...");
        $parentCategory = Category::create([
            'name' => 'Parent Category',
            'slug' => 'parent-category',
            'description' => 'This is a parent category.',
        ]);

        $subCategory1 = Category::create([
            'name' => 'Subcategory 1',
            'slug' => 'subcategory-1',
            'description' => 'This is the first subcategory.',
            'parent_id' => $parentCategory->id,
        ]);

        $subCategory2 = Category::create([
            'name' => 'Subcategory 2',
            'slug' => 'subcategory-2',
            'description' => 'This is the second subcategory.',
            'parent_id' => $parentCategory->id,
        ]);

        dump("Step 2: Retrieving subcategories for the parent category...");
        $subCategories = $parentCategory->children;

        $this->assertCount(2, $subCategories);
        $this->assertTrue($subCategories->contains($subCategory1));
        $this->assertTrue($subCategories->contains($subCategory2));
        dump("Subcategory retrieval for parent category test passed.");
    }

    /** @test */
    public function it_generates_correct_url_and_breadcrumb_for_subcategories()
    {
        dump("Step 1: Creating a parent category and a subcategory...");
        $parentCategory = Category::create([
            'name' => 'Parent Category',
            'slug' => 'parent-category',
            'description' => 'This is a parent category.',
        ]);

        $subCategory = Category::create([
            'name' => 'Subcategory',
            'slug' => 'subcategory',
            'description' => 'This is a subcategory.',
            'parent_id' => $parentCategory->id,
        ]);

        dump("Step 2: Verifying URL generation for the subcategory...");
        $expectedUrl = 'parent-category/subcategory';
        $this->assertEquals($expectedUrl, $subCategory->url);

        dump("Step 3: Verifying breadcrumb generation for the subcategory...");
        $expectedBreadcrumb = '<a href="' . url('categories/parent-category') . '">Parent Category</a> / <a href="' . url('categories/parent-category/subcategory') . '">Subcategory</a>';
        $this->assertEquals($expectedBreadcrumb, $subCategory->breadcrumb);

        dump("URL and breadcrumb generation for subcategory test passed.");
    }
    /** @test */
    public function it_identifies_root_categories_correctly()
    {
        dump("Creating a root category...");
        $rootCategory = Category::create([
            'name' => 'Root Category',
            'slug' => 'root-category',
            'description' => 'This is a root category.',
        ]);

        dump("Checking that root category has no parent...");
        $this->assertNull($rootCategory->parent_id);
        $this->assertNull($rootCategory->parent);
        dump("Root category identification test passed.");
    }

    /** @test */
    public function it_updates_parent_and_regenerates_url_breadcrumb()
    {
        dump("Creating initial parent category...");
        $initialParent = Category::create(['name' => 'Initial Parent', 'slug' => 'initial-parent']);

        dump("Creating a category with initial parent...");
        $childCategory = Category::create([
            'name' => 'Child Category',
            'slug' => 'child-category',
            'parent_id' => $initialParent->id,
        ]);

        dump("Creating new parent category...");
        $newParent = Category::create(['name' => 'New Parent', 'slug' => 'new-parent']);

        dump("Updating the parent of child category...");
        $childCategory->update(['parent_id' => $newParent->id]);

        dump("Verifying updated URL and breadcrumb...");
        $expectedUrl = 'new-parent/child-category';
        $expectedBreadcrumb = '<a href="' . url('categories/new-parent') . '">New Parent</a> / <a href="' . url('categories/new-parent/child-category') . '">Child Category</a>';

        $this->assertEquals($expectedUrl, $childCategory->url);
        $this->assertEquals($expectedBreadcrumb, $childCategory->breadcrumb);
        dump("Parent update and regeneration test passed.");
    }
}
