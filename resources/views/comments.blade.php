@foreach ($comments as $comment)
    <div class="col-md-12 col-sm-12">
        <div class="col-lg-12 col-md-12 col-xs-12 mt-3">
            <section class="page-contents">
                <div class="profile-content">
                    <div class="headline-profile">
                        <span>نظرات</span>
                    </div>
                    <div class="profile-stats">
                        <div class="grid">
                            <div class="">
                                <div class="js-user-comment-container">
                                    <div class="profile-comment">
                                        <div class="profile-comment-content" style="padding: 0">
                                            <h4>{{ $comment->user->name }}
                                                ({{ jdate($comment->created_at)->format('%A, %d %B %y') }})
                                                <span class="profile-comment-status-approved">تایید
                                                    شده</span>
                                            </h4>
                                            <p>{{ $comment->comment }}</p>

                                        </div>
                                        @include('comments' , ['comments' => $comment->child ])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endforeach

