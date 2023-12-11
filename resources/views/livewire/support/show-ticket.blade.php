<div>
    <x-page title="جزئیات تیکت">
        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="back-page">
                <a href="{{ route('tickets.index') }}"><img src="{{ asset('img/svg/arrow-left.svg') }}" alt="arrow-left" class="svg">
                    بازگشت</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-12 mb-30">
                <div class="ticket-details-contact">
                    <h4>{{ $ticket->title }}</h4>
                    <div class="ticket-details-contact__ift">
                        <div class="ticket-details-contact__ift-wrapper">
                            <span class="ticket-details-contact__ift-rule">درخواست شده توسط:</span>
                            <div class="ticket-details-contact__ift-namTitle">
                                <img src="{{ $ticket->user->avatar ? asset('storage/' . $ticket->user->avatar) : asset('img/ellipse11.png') }}" alt="tdi.png">
                                <h6>{{ $ticket->user->name }}</h6>
                            </div>
                        </div>
                        <div class="ticket-details-contact__ift-wrapper">
                            <span class="ticket-details-contact__ift-rule">تاریخ ایجاد</span>
                            <div class="ticket-details-contact__ift-namTitle">
                                <h6>{{ jdate($ticket->created_at)->format('%A, %d %B %y') }}</h6>
                            </div>
                        </div>
                        <div class="ticket-details-contact__ift-wrapper">
                            <span class="ticket-details-contact__ift-rule">تاریخ به روز رسانی</span>
                            <div class="ticket-details-contact__ift-namTitle">
                                <h6>{{ jdate($ticket->created_at)->format('%A, %d %B %y') }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-details-contact__status">
                        <div class="ticket-details-contact__status-item">
                            <span class="text-dark">اولویت:</span>
                            <span>{{ $ticket->priority }}</span>
                        </div>
                        <div class="ticket-details-contact__status-item">
                            <span class="text-dark">وضعیت:</span>
                            <span>{{ $ticket->status }}</span>
                        </div>
                    </div>
                    <div class="ticket-details-contact__overview">
                        <h4 class="ticket-details-contact__overview-title">متن پیام :</h4>
                        <p>{{ $ticket->message }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="ticket-file-attach">
                <h4>فایل پیوست</h4>
                <div class="ticket-file-attach__wrapper">
                    @if ($ticket->attachment)
                        <div class="ticket-file-attach__items">
                            <div class="ticket-file-attach__items_detail">
                                <img src="{{ asset('img/psd.png') }}" alt="psd">
                                <div class="div">
                                    <a href="javascript::void(0)" wire:click="downloadAttachment">
                                        <h6>{{ explode('/', $ticket->attachment)[1] }}</h6>
                                        <span>MB {{ number_format(\Illuminate\Support\Facades\Storage::disk('local')->size($ticket->attachment) / 1048576, 3) }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <x-alert :type="'warning'" :message="'فایلی پیوست نشده است'" />
                    @endif
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-50">
                <div class="ticket-chat-wrapper pt-25 pb-30">
                <h4>پاسخ ها</h4>
                <div class="ticket-search-body">
                    <ul class="ticket-user-list pe-15">
                        @forelse ($ticket->responses as $response)
                            <li class="ticket-user-list-item">
                                <div class="ticket-user-list-item__wrapper">
                                <div class="avatar avatar-circle ms-0">
                                    <img src="{{ $response->user->avatar ? asset('storage/' . $response->user->avatar) : asset('img/ellipse11.png') }}" class="rounded-circle  d-flex bg-opacity-primary" alt="image">
                                </div>
                                <div class="ticket-users-list-body">
                                    <div class="ticket-users-list-body-title">
                                        <h6>{{ $response->user->name }}</h6>
                                        <div class="text-limit" data-maxlength="10">
                                            <p class="mb-0">{{ $response->message }}</p>
                                        </div>
                                    </div>
                                    <div class="last-chat-time unread">
                                        <small>{{ \Morilog\Jalali\Jalalian::forge($response->created_at)->ago() }}</small>
                                    </div>
                                </div>
                                </div>
                            </li>
                        @empty
                            <li class="ticket-user-list-item">پاسخی یافت نشد.</li>
                        @endforelse
                    </ul>
                </div><!-- Ends: .search-body -->
                <div class="ticket-search-header">
                    <form wire:submit="sendResponse" class="d-flex align-items-center">
                        <img class="svg" src="{{ asset('img/svg/smile.svg') }}" alt="smile">

                        <input wire:model="message" class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="پیام خود را تایپ کنید..." aria-label="Search">
                        
                        <input type="file" wire:model="attachment" name="attachment" id="attachment" style="display: none;">
                        
                        <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle" id="file-attacher">
                            <img class="svg" src="{{ asset('img/svg/paperclip.svg') }}" alt="paperclip">
                        </button>
                        
                        @push('scripts')
                            <script>
                                document.getElementById('file-attacher').addEventListener('click', function() {
                                    document.getElementById('attachment').click();
                                });
                            </script>
                        @endpush

                        <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                            <img class="svg" src="{{ asset('img/svg/send.svg') }}" alt="send">
                        </button>
                    </form>
                </div>
                <!-- Ends: .search-tab -->
                </div>
            </div>
        </div>
    </x-page>
</div>
