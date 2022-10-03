@extends('admin.master')
@section('container-leftbar')
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="social_activity" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">My Activity</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i
                                    class="fa fa-bars"></i></button>
                        </div>
                        <div class="card bg-primary-gradient mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-md-start align-items-center flex-column flex-md-row">
                                    <div class="image-input avatar xxl rounded-4"
                                        style="background-image: url(../assets/img/avatar.png)">
                                        <div class="avatar-wrapper rounded-4"
                                            style="background-image: url(../assets/img/profile_av.png)"></div>
                                        <div class="file-input">
                                            <input type="file" class="form-control" name="file-input" id="file-input">
                                            <label for="file-input" class="fa fa-pencil shadow text-muted"></label>
                                        </div>
                                    </div>
                                    <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                                        <h5 class="mb-0 fw-light">Allie Grater</h5>
                                        <small>UIUX Designer</small>
                                        <div
                                            class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="card py-2 px-3 me-2 mt-2">
                                                <small class="text-muted">Follower</small>
                                                <div class="fs-5 color-600">1705</div>
                                            </div>
                                            <div class="card py-2 px-3 me-2 mt-2">
                                                <small class="text-muted">Following</small>
                                                <div class="fs-5 color-600">245</div>
                                            </div>
                                            <div class="card py-2 px-3 me-2 mt-2">
                                                <small class="text-muted">Likes</small>
                                                <div class="fs-5 color-600">850</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xxl-8 col-xl-12 col-lg-7 col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <textarea rows="3" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        <div class="mt-3">
                                            <button class="btn btn-primary">Post</button>
                                            <div class="btn btn-link file-input">
                                                <input type="file" class="form-control" name="file-input"
                                                    id="file-input">
                                                <label for="file-input" class="fa fa-paperclip"></label>
                                            </div>
                                            <button class="btn btn-link"><i class="fa fa-camera text-muted"></i></button>
                                            <button class="btn btn-link"><i class="fa fa-smile-o text-muted"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled">

                                    <li class="card mb-2">
                                        <div class="card-header pb-0">
                                            <div class="d-flex">
                                                <img class="avatar rounded-circle" src="../assets/img/profile_av.png"
                                                    alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0">
                                                        <span class="author">Allie Grater</span>
                                                        <small class="text-muted">posted a status</small>
                                                    </h6>
                                                    <small class="text-muted">1 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="more-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <ul
                                                    class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li class="fw-bold mb-2">Quick Actions</li>
                                                    <li><a class="dropdown-item" href="#">Save post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Hide post <i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Snooze 30 days<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Turn on notifications<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Report post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Edit post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Delete post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-detail">
                                                <p class="lead">Hampden-Sydney College in Virginia, looked up one of the
                                                    more obscure</p>
                                                <p class="lead">It has roots in a piece of classical Latin literature
                                                    from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                                                <div class="mb-2 post-tag">
                                                    <a href="#" title="" class="me-2">#Design</a><a
                                                        href="#" title="" class="me-2">#HTML</a><a
                                                        href="#" title="" class="me-2">#ThemeMakker</a>
                                                </div>
                                                <a class="fancybox img-fluid" rel="ligthbox"
                                                    href="../assets/img/gallery/10.jpg">
                                                    <img class="img-fluid rounded-4" alt=""
                                                        src="../assets/img/gallery/10.jpg">
                                                </a>
                                            </div>
                                            <div class="post-action">
                                                <div class="mb-2 mt-4">
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-thumbs-up"></i> Like (105)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-comment"></i> Comment (2)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-share"></i> Share (6)</a>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Rose Rivera</span>
                                                            <small class="text-muted msg-time">1 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">It is a long established fact that a
                                                            reader will be distracted by the readable content of a page when
                                                            looking at its layout.</span>
                                                    </div>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Robert Hammer</span>
                                                            <small class="text-muted msg-time">1 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">If you are going to use a passage of Lorem
                                                            Ipsum, you need to be sure there isn't anything
                                                            embarrassing</span>
                                                    </div>
                                                </div>
                                                <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card mb-2">
                                        <div class="card-header pb-0">
                                            <div class="d-flex">
                                                <img class="avatar rounded-circle" src="../assets/img/profile_av.png"
                                                    alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0">
                                                        <span class="author">Allie Grater</span>
                                                        <small class="text-muted">posted a status</small>
                                                    </h6>
                                                    <small class="text-muted">4 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="more-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <ul
                                                    class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li class="fw-bold mb-2">Quick Actions</li>
                                                    <li><a class="dropdown-item" href="#">Save post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Hide post <i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Snooze 30 days<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Turn on notifications<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Report post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Edit post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Delete post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-detail">
                                                <p class="lead">Need a website designer for an online virtual football
                                                    league, lmk if interested</p>
                                                <div class="mb-2 post-tag">
                                                    <a href="#" title="" class="me-2">#Figma</a><a
                                                        href="#" title="" class="me-2">#HTML</a><a
                                                        href="#" title="" class="me-2">#SCSS</a>
                                                </div>
                                            </div>
                                            <div class="post-action">
                                                <div class="mb-2 mt-4">
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-thumbs-up"></i> Like (0)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-comment"></i> Comment (0)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-share"></i> Share (0)</a>
                                                </div>
                                                <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card mb-2">
                                        <div class="card-header pb-0">
                                            <div class="d-flex">
                                                <img class="avatar rounded-circle" src="../assets/img/profile_av.png"
                                                    alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0">
                                                        <span class="author">Allie Grater</span>
                                                        <small class="text-muted">posted a status</small>
                                                    </h6>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="more-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <ul
                                                    class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li class="fw-bold mb-2">Quick Actions</li>
                                                    <li><a class="dropdown-item" href="#">Save post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Hide post <i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Snooze 30 days<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Turn on notifications<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Report post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Edit post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Delete post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-detail">
                                                <p class="lead">Let's exchange our gigs</p>
                                                <ul class="lead mb-3">
                                                    <li>Open My Gig</li>
                                                    <li>Swap Gig Images</li>
                                                    <li>Save My Gig</li>
                                                    <li>Then send me ss and I will do same promise</li>
                                                </ul>
                                                <div class="mb-2 post-tag">
                                                    <a href="#" title="" class="me-2">#Design</a><a
                                                        href="#" title="" class="me-2">#HTML</a><a
                                                        href="#" title="" class="me-2">#ThemeMakker</a>
                                                </div>
                                            </div>
                                            <div class="post-action">
                                                <div class="mb-2 mt-4">
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-thumbs-up"></i> Like (78)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-comment"></i> Comment (3)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-share"></i> Share (15)</a>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Rose Rivera</span>
                                                            <small class="text-muted msg-time">3 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">If you are going to use a passage of Lorem
                                                            Ipsum, you need to be sure there isn't anything embarrassing
                                                            hidden in the middle of text. All the Lorem Ipsum
                                                            generators</span>
                                                        <div class="card d-flex flex-row p-3 mb-1 mt-3">
                                                            <img class="avatar rounded-circle"
                                                                src="../assets/img/xs/avatar7.jpg" alt="">
                                                            <div class="flex-fill ms-3">
                                                                <div class="d-flex flex-wrap justify-content-between">
                                                                    <span class="h6 mb-1 author">Andew Jon</span>
                                                                    <small class="text-muted msg-time">1 hour ago</small>
                                                                </div>
                                                                <span class="text-muted">Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s,
                                                                    when an unknown printer took</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Robert Hammer</span>
                                                            <small class="text-muted msg-time">1 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">Internet tend to repeat predefined chunks
                                                            as necessary, making this the first true generator on the
                                                            Internet. It uses a dictionary of over 200 Latin words</span>
                                                    </div>
                                                </div>
                                                <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card mb-2">
                                        <div class="card-header pb-0">
                                            <div class="d-flex">
                                                <img class="avatar rounded-circle" src="../assets/img/profile_av.png"
                                                    alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0">
                                                        <span class="author">Allie Grater</span>
                                                        <small class="text-muted">posted a status</small>
                                                    </h6>
                                                    <small class="text-muted">6 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="more-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <ul
                                                    class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li class="fw-bold mb-2">Quick Actions</li>
                                                    <li><a class="dropdown-item" href="#">Save post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Hide post <i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Snooze 30 days<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Turn on notifications<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Report post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Edit post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                    <li><a class="dropdown-item" href="#">Delete post<i
                                                                class="fa fa-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="post-detail">
                                                <p class="lead">I need a website developer designer and React, Angular,
                                                    Laravel asap</p>
                                                <div class="mb-2 post-tag">
                                                    <a href="#" title="" class="me-2">#ReactJs</a><a
                                                        href="#" title="" class="me-2">#Laravel</a><a
                                                        href="#" title="" class="me-2">#ThemeMakker</a><a
                                                        href="#" title="" class="me-2">#Angular</a>
                                                </div>
                                                <a class="fancybox img-fluid" rel="ligthbox"
                                                    href="../assets/img/gallery/1.jpg">
                                                    <img class="img-fluid rounded-4 w120" alt=""
                                                        src="../assets/img/gallery/1.jpg">
                                                </a>
                                                <a class="fancybox img-fluid" rel="ligthbox"
                                                    href="../assets/img/gallery/2.jpg">
                                                    <img class="img-fluid rounded-4 w120" alt=""
                                                        src="../assets/img/gallery/2.jpg">
                                                </a>
                                                <a class="fancybox img-fluid" rel="ligthbox"
                                                    href="../assets/img/gallery/3.jpg">
                                                    <img class="img-fluid rounded-4 w120" alt=""
                                                        src="../assets/img/gallery/3.jpg">
                                                </a>
                                            </div>
                                            <div class="post-action">
                                                <div class="mb-2 mt-4">
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-thumbs-up"></i> Like (105)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-comment"></i> Comment (2)</a>
                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i
                                                            class="fa fa-share"></i> Share (6)</a>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Rose Rivera</span>
                                                            <small class="text-muted msg-time">1 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">Yes available</span>
                                                    </div>
                                                </div>
                                                <div class="card d-flex flex-row p-3 mt-1">
                                                    <img class="avatar rounded-circle" src="../assets/img/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="h6 mb-1 author">Robert Hammer</span>
                                                            <small class="text-muted msg-time">1 hour ago</small>
                                                        </div>
                                                        <span class="text-muted">Intrested</span>
                                                    </div>
                                                </div>
                                                <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <nav class="mt-3">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">2</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xxl-4 col-xl-12 col-lg-5 col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title d-flex justify-content-between align-items-center">Connection
                                            Request<span class="badge bg-primary">20 min ago</span></h6>
                                        <div class="d-flex align-items-center my-4">
                                            <img class="avatar lg rounded" src="../assets/img/profile_av.png"
                                                alt="">
                                            <div class="flex-fill ms-3">
                                                <div class="h5 mb-1">Hossein Shams</div>
                                                <span class="text-muted">21 mutual connections</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="btn mx-1 btn-light-primary flex-grow-1"><i
                                                    class="fa fa-check me-2"></i>Accept</a>
                                            <a href="#" class="btn mx-1 btn-light-danger flex-grow-1"><i
                                                    class="fa fa-close me-2"></i>Ignore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Personal Information</h6>
                                        <p class="card-text text-muted">Hi I'm Allie Grater, Contrary to popular belief,
                                            Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            Latin literature.</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Full
                                                    Name:</span>Allie Grater</li>
                                            <li class="py-2"><span
                                                    class="text-muted me-2 w90 d-inline-block">E-mail:</span>alliegrater@luno.com
                                            </li>
                                            <li class="py-2"><span
                                                    class="text-muted me-2 w90 d-inline-block">Phone:</span>+01 (741) 852
                                                123</li>
                                            <li class="py-2"><span
                                                    class="text-muted me-2 w90 d-inline-block">Location:</span>California,
                                                USA</li>
                                            <li class="py-2"><span
                                                    class="text-muted me-2 w90 d-inline-block">Website:</span>http://website.com
                                            </li>
                                            <li class="py-2"><span
                                                    class="text-muted me-2 w90 d-inline-block">Social:</span>
                                                <a href="#" class="py-1 px-2"><i class="fa fa-globe"></i></a>
                                                <a href="#" class="py-1 px-2"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header pb-0">
                                        <h6 class="card-title mb-0">Friends</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                        <div class="me-auto ms-auto">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar1.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar2.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar3.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar4.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar5.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar6.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar7.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar8.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift" src="../assets/img/xs/avatar9.jpg"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                alt="" data-bs-original-title="Avatar Name"
                                                aria-label="Avatar Name">
                                            <img class="avatar rounded-circle m-1 lift"
                                                src="../assets/img/xs/avatar10.jpg" data-bs-toggle="tooltip"
                                                data-placement="top" title="" alt=""
                                                data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header pb-0">
                                        <h6 class="card-title mb-0">Followers</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled custom_scroll mb-0">
                                            <li class="card p-3 my-1 flex-row">
                                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar1.jpg"
                                                    alt="">
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Chris Fox</div>
                                                    <span class="text-muted small">21 mutual connections</span>
                                                </div>
                                            </li>
                                            <li class="card p-3 my-1 flex-row">
                                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg"
                                                    alt="">
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Marshall Nichols</div>
                                                    <span class="text-muted small">5 mutual connections</span>
                                                </div>
                                            </li>
                                            <li class="card p-3 my-1 flex-row">
                                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar3.jpg"
                                                    alt="">
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Orlando Lentz</div>
                                                    <span class="text-muted small">9 mutual connections</span>
                                                </div>
                                            </li>
                                            <li class="card p-3 my-1 flex-row">
                                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar4.jpg"
                                                    alt="">
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Alexander</div>
                                                    <span class="text-muted small">18 mutual connections</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header pb-0">
                                        <h6 class="card-title mb-0">Labels</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap tag-group mt-3">
                                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">Family</a>
                                            <a href="#"
                                                class="m-1 small tag py-1 px-3 border border-primary rounded">Home</a>
                                            <a href="#"
                                                class="m-1 small tag py-1 px-3 border border-primary bg-primary text-light rounded">UI/UX
                                                Designer</a>
                                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">ReactJs</a>
                                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">Angular</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header pb-0">
                                        <h6 class="card-title mb-0">Latest Photos</h6>
                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-1">
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/1.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/1.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/2.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/2.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/3.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/3.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/4.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/4.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/5.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/5.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/6.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/6.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/7.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/7.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/8.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/8.jpg">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a class="fancybox rounded d-block" rel="ligthbox"
                                                    href="../assets/img/gallery/9.jpg">
                                                    <img class="img-fluid rounded" alt=""
                                                        src="../assets/img/gallery/9.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script src="../assets/js/bundle/fancybox.bundle.js"></script>

                                <script>
                                    /*	end gallery */
                                    $(document).ready(function() {
                                        $(".fancybox").fancybox({
                                            openEffect: "none",
                                            closeEffect: "none"
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social_people" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">People</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i
                                    class="fa fa-bars"></i></button>
                        </div>
                        <div class="row g-3">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/1.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar1.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Comeren Diaz</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/2.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar2.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Dean Otto</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/3.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar1.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Jack Bird</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/4.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar4.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Marshall Nichols</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/5.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar5.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Orlando Lentz</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/6.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar6.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Thomas's Joe</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3"
                                        style="z-index: 9;">
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div style="height: 120px; overflow: hidden;">
                                        <img src="../assets/img/gallery/7.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body text-center position-relative pt-5">
                                        <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle"
                                            src="../assets/img/xs/avatar7.jpg" alt="">
                                        <h6 class="mt-4 mb-0">Michelle Green</h6>
                                        <span class="text-muted">example@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                        <button class="btn btn-outline-secondary btn-sm">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social_feed" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">News Feed</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle"
                                type="button"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="card">
                            <div class="card-body text-center p-5">
                                <img src="../assets/img/no-data.svg" class="w120" alt="No Data">
                                <div class="mt-4 mb-3">
                                    <span class="text-muted">No data to show</span>
                                </div>
                                <button type="button" class="btn btn-white border lift">Get Started</button>
                                <button type="button" class="btn btn-primary border lift">Back to Home</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social_photos" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">Photos</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle"
                                type="button"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="card img-hover p-1">

                            <div class="row g-1">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 1"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/1.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 2"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/2.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 3"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/3.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 4"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/4.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 5"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/5.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 6"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/6.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 8"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/7.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 9"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/8.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 10"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/9.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 11"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/10.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 12"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/11.jpg"></a></div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 13"
                                        href="#"><img class="thumbnail rounded img-fluid"
                                            src="../assets/img/gallery/12.jpg"></a></div>
                            </div>
                        </div>

                        <div class="modal fade" id="myModalGallery" tabindex="-1">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Image Gallery</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="modalCarousel" class="carousel slide carousel-fade pointer-event"
                                            data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active"><a title="Image 1"
                                                        href="#"><img class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/1.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 2" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/2.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 3" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/3.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 4" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/4.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 5" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/5.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 6" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/6.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 8" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/7.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 9" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/8.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 10" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/9.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 11" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/10.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 12" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/11.jpg"></a></div>
                                                <div class="carousel-item"><a title="Image 13" href="#"><img
                                                            class="thumbnail rounded img-fluid"
                                                            src="../assets/img/gallery/12.jpg"></a></div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#modalCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#modalCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(function() {
                                /* copy loaded thumbnails into carousel */
                                $('.row .thumbnail').on('load', function() {}).each(function(i) {
                                    // if(this.complete) {
                                    var item = $('<div class="carousel-item"></div>');
                                    var itemDiv = $(this).parents('div');
                                    $(itemDiv.html()).appendTo(item);
                                    item.appendTo('.carousel-inner');
                                    if (i == 0) { // set first item active
                                        item.addClass('active');
                                        // }
                                    }
                                });
                                /* activate the carousel */
                                $('#modalCarousel').carousel({
                                    interval: false
                                });
                                /* when clicking a thumbnail */
                                $('.row .thumbnail').click(function() {
                                    var idx = $(this).parents('div').index();
                                    var id = parseInt(idx);
                                    $('#myModalGallery').modal('show'); // show the modal
                                    $('#modalCarousel').carousel(id); // slide carousel to selected        
                                });
                            })
                        </script>
                    </div>
                    <div class="tab-pane fade" id="social_page" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">Page</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle"
                                type="button"><i class="fa fa-bars"></i></button>
                        </div>

                        <div class="card">
                            <div class="card-body text-center p-5">
                                <img src="../assets/img/no-data.svg" class="w120" alt="No Data">
                                <div class="mt-4 mb-3">
                                    <span class="text-muted">No data to show</span>
                                </div>
                                <button type="button" class="btn btn-white border lift">Get Started</button>
                                <button type="button" class="btn btn-primary border lift">Back to Home</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social_setting" role="tabpanel">
                        <div class="d-flex justify-content-between mb-2">
                            <h4 class="mt-1 mb-0">Settings</h4>
                            <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle"
                                type="button"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="row g-3">
                            <div class="col-xxl-7 col-xl-6 col-lg-7 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title m-0">User Settings</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-4">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">User Name <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Contact Person</label>
                                                    <input class="form-control" value="Louis Pierce" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" value="+1 882-635-7531"
                                                        type="number">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <textarea class="form-control" rows="4" placeholder="44 Shirley Ave. West Chicago, IL 60185"
                                                        aria-label="With textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text">@</span>
                                                    <input type="email" class="form-control"
                                                        value="LouisPierce@example.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label class="form-label">Website Url</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">http://</span>
                                                    <input type="url" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-control">
                                                        <option value="">-- Select Country --</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da
                                                            Cunha</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich
                                                            Islands</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands
                                                        </option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">State/Province</label>
                                                    <select class="form-control">
                                                        <option>California</option>
                                                        <option>Alaska</option>
                                                        <option>Alabama</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input class="form-control" value="New York" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postal Code</label>
                                                    <input class="form-control" value="91403" type="number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <input class="form-control" value="818-978-7102" type="number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Fax</label>
                                                    <input class="form-control" value="818-978-7102" type="number">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="button" class="btn btn-lg btn-primary">SAVE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-6 col-lg-5 col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6 class="card-title m-0">Notifications Settings</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ns-1">
                                                <label class="form-check-label" for="ns-1"> Anyone send me a message
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ns-2">
                                                <label class="form-check-label" for="ns-2"> Anyone seeing my profile
                                                    page </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ns-3">
                                                <label class="form-check-label" for="ns-3"> Anyone posts a comment
                                                    on my post </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ns-4">
                                                <label class="form-check-label" for="ns-4"> Anyone send me a message
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ns-5">
                                                <label class="form-check-label" for="ns-5"> Anyone seeing my profile
                                                    page </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title m-0">Change Password</h6>

                                        <div class="dropdown morphing scale-left">
                                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                                aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" class="more-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="louispierce"
                                                        disabled="" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        value="louis.info@yourdomain.com" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="border-top pt-2 mt-3 mb-3">Change Password</h6>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control"
                                                        placeholder="Current Password">
                                                </div>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control"
                                                        placeholder="New Password">
                                                </div>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <button type="button" class="btn btn-lg btn-primary">SAVE</button>
                                                &nbsp; <button type="button"
                                                    class="btn btn-lg btn-default">CANCEL</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
