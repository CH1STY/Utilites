@extends('layout')


@section('content')
<div class="container-fluid g-0">
    <!-- header -->

    <header class="w-100 header-top">
        <img src="assets/images/header-image.jpg" alt="" class="img-fluid fluid-header">
    </header>

    <!-- header section ends   -->

    <!-- floating card section -->
    <div class="container-fluid w-100 g-0 ">
        <div class="row w-100 g-0">
            <div class="col-lg-7 col-sm-10 col-md-9 position-set">
                <div class="card ms-lg-5 custom-card-top">
                    <div class="card-body p-lg-5 py-5">
                        <h3 class="h3 ps-4 fw-bold card-head-text paddingExtra-5">OVMS is the useful website dedicated
                            to <span class="text-orange"> Customer and Volunteer</span> Service</h3>
                        <div class="pe-5 ">
                            <p class="ps-4 text-justify pe-lg-5 ">We envision a society in which it is simple for
                                anybody to make a difference in their town and around the city. We will
                                act as a cultural catalyst, collaborating with organizations and individuals to create a
                                culture where sitting on the
                                sidelines is no longer an option. We'll define a new sort of volunteerism for the
                                twenty-first century, one that
                                encourages individuals to donate their time, talents, voices, and resources to help
                                build a better future for everyone.</p>
                            <p>
                                <a class="fw-bold text-orange pt-1 pb-3" data-bs-toggle="collapse"
                                    href="#collapseExample1" role="button" aria-expanded="false"
                                    aria-controls="collapseExample1">
                                    Show more
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="text-justify py-3 small">
                                    <h4>Our Mission And Vision</h4>
                                    <p class="text-orange py-3 fw-bold"> THE MISSION OF THE OVMS IS TO INSPIRE,
                                        EQUIP, AND
                                        MOBILIZE PEOPLE TO CHANGE THE
                                        CITY. WE DREAM OF A CITY IN WHICH
                                        EVERYONE UNDERSTANDS THEIR ABILITY TO MAKE A DIFFERENCE, CREATING HEALTHY
                                        COMMUNITIES IN VIBRANT, PARTICIPATING
                                        SOCIETIES.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- floating card section  ends-->

    <div class="container">
        <div class="row mt-5 g-0 justify-content-center">
            <div class="col-lg-4 col-sm-12 ">
                <div class="card">
                    <div class="pe-3">
                        <img src="assets/images/card-images/card-image-1.png" class="card-img-top p-5" alt="">

                    </div>
                    <div class="card-body">
                        <p class="h5 pe-2 fw-bold">Tap and we just one click away</p><br>
                        <p class="py-2 pe-3 small-card-para-text">Customer service is important to us. By providing a
                            live human being to answer calls at all times, we will show that we
                            share their values. And they'll never feel like their problems are being put on hold when it
                            comes to us or our service. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="pe-3">
                        <img src="assets/images/card-images/card-image-2.png" class="card-img-top p-2" alt="">
                    </div>
                    <div class="card-body">
                        <p class="h5 pe-2 fw-bold">Our first concern is your virtual-welfare
                        </p>
                        <p class="py-2 pe-3 small-card-para-text">
                            Our highly skilled staff works in mission-critical situations with enormous volumes of
                            sensitive data, so we seek to
                            decrease risk, increase performance, and provide long-term service.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="pe-3">
                        <img src="assets/images/card-images/card-image-3.svg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="h5 pe-2 fw-bold p-1">Pursuing excellence</p>
                        <p class="py-2 pe-3 small-card-para-text">We believe our goals are best met by serving not
                            only
                            the adult population of our parish, but starting our children on
                            the path to their future. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end of card-section-1  -->

    <!-- starting section-2 -->
    <div class="container">

        <div class="row g-0 my-5">
            <h1 class="fw-bold text-center h3 m-auto pb-4 pt-5 mt-3">Making your facility known is our priority
            </h1>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/list-tick.svg" class="py-5">
                        <h4 class="h6 py-3 fw-bold">Products And Services</h4>
                        <p class="card-para-text py-3 small">Helping volunteers, Profits and corporations maximize their
                            impact in the communities they serve.</p>
                        {{-- <p class="fw-bold text-orange pt-1 pb-3">Show me more</p> --}}
                        <p>
                            <a class="fw-bold text-orange pt-1 pb-3" data-bs-toggle="collapse" href="#collapseExample2"
                                role="button" aria-expanded="false" aria-controls="collapseExample2">
                                Show more
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="text-justify py-3 small">
                                <h4 class="h6 py-3 fw-bold">Our Approach</h4>
                                Individual volunteers, profits, and businesses may make a lasting influence in their
                                communities and the
                                city, according
                                to OVMS. We provide technologies that make it easier for volunteers to identify
                                volunteer opportunities, for
                                businesses
                                to share best practices and develop customized solutions, and for dedicated volunteers
                                to be rewarded for
                                their
                                commitment to doing good. Together, these services contribute to the development of a
                                global culture of
                                volunteers and
                                make it even easier for everyone to participate
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/alpha-tick.svg" class="py-5">
                        <h4 class="h6 py-3 fw-bold">Volunteers</h4>
                        <p class="card-para-text py-3 pb-custom-small small">Our narrative begins with a vision of a
                            thousand OVMS and continues with the aid of every individual who has recognized
                            their ability to make a difference.
                            Individuals and families are inspired and equipped to be a force for good in the city, and
                            we connect them with
                            opportunities to serve while also honoring their efforts.</p>

                        <p>
                            <a class="fw-bold text-orange pt-1 pb-3" data-bs-toggle="collapse" href="#collapseExample3"
                                role="button" aria-expanded="false" aria-controls="collapseExample3">
                                Show more
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <div class="text-justify py-3 small">
                                <h4 class="h6 py-3 fw-bold">How we add value for Volunteers</h4>
                                Individual volunteers, profits, and businesses may make a lasting influence in their
                                communities and the
                                city, according
                                to OVMS. We provide technologies that make it easier for volunteers to identify
                                volunteer opportunities, for
                                businesses
                                to share best practices and develop customized solutions, and for dedicated volunteers
                                to be rewarded for
                                their
                                commitment to doing good. Together, these services contribute to the development of a
                                global culture of
                                volunteers and
                                make it even easier for everyone to participate
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/rect-plus.svg" class="py-5">
                        <h4 class="h6 py-3 fw-bold">OVMS Offer</h4>
                        <p class="card-para-text py-3 small">Chances for people to get together, take action to better
                            our communities, and recognize the value of volunteerism.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end of section-2 -->


    <!-- section-3 -->
    <div class="container">
        <div class="row g-0 pb-5 my-5 justify-content-around">
            <div class="col-lg-3 col-md-9 mx-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold text-orange text-uppercase">Our OVMS developers</h3><br><br><br>
                        <h5 class="fw-bold ">Here is Our Developers Identity</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 small-screen-padding imgZoom">
                <div class="card">
                    <img src="assets/images/celeb-images/celeb1.jpeg" class="card-img-top p-1"></img>
                    <div class="card-body no-padding">
                        <h6 class="fw-bold text-uppercase pt-2">Mostahid Ibna Alam</h5>
                            <p class="small card-para-text">Developer</p>
                            <a class="fw-bold text-blue" style="text-decoration:none"
                                href="https://linkedin.com/in/mostahid-ibna-alam-14b9a3175">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg><i class="bi bi-linkedin"></i> View Linkedin Profile
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 small-screen-padding imgZoom">
                <div class="card">
                    <img src="assets/images/celeb-images/celeb2.jpg" class="card-img-top p-1"></img>
                    <div class="card-body no-padding">
                        <h6 class="fw-bold pt-2">SYEDA ISRAT JAHAN</h5>
                            <p class="small card-para-text">Developer</p>
                            <a class="fw-bold text-blue hover-under" style="text-decoration:none" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg><i class="bi bi-linkedin"></i> View Linkedin Profile
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 small-screen-padding imgZoom">
                <div class="card">
                    <img src="assets/images/celeb-images/celeb3.png" class="card-img-top p-1"></img>
                    <div class="card-body no-padding">
                        <h6 class="fw-bold pt-2">MD. ASIF AHMED</h5>
                            <p class="small card-para-text">Developer</p>
                            <a class="fw-bold text-blue hover-under" style="text-decoration:none"
                                href="https://www.linkedin.com/in/asif-ahmed-122b11160">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg><i class="bi bi-linkedin"></i> View Linkedin Profile
                            </a>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-12 small-screen-padding imgZoom">
                <div class="card">
                    <img src="assets/images/celeb-images/celeb4.jpg" class="card-img-top p-1"></img>
                    <div class="card-body no-padding">
                        <h6 class="fw-bold pt-2">RUBAB ZAMAN ANIKA</h5>
                            <p class="small card-para-text">Developer</p>
                            <a class="fw-bold text-blue hover-under" style="text-decoration:none"
                                href="https://www.linkedin.com/in/rubab-zaman-anika-a46baa1a0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg><i class="bi bi-linkedin"></i> View Linkedin Profile
                            </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end of section 3 -->

    <!-- starting section-4 -->
    <div class="container">
        <div class="row g-0 my-5 justify-content-around">
            <h1 class="fw-bold text-center h3 m-auto pb-4 pt-5 mt-3">Our Advantages</h1>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/double-cube.svg" class="py-5">
                        <h4 class="h5 py-3 fw-bold">Easy To Hire</h4>
                        <p class="text-justify py-3 small">The online volunteer management system is a process
                            where
                            users can hire a volunteer through the system. The user can
                            enjoy personal services with a more convenient atmosphere, users can save their
                            valuable
                            time, and can keep themselves
                            safe during a situation like Covid-19 by not going outside.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/files.svg" class="py-5">
                        <h4 class="h5 py-3 fw-bold">Community Services For The Users</h4>
                        <p class="text-justify py-3 small">The main objective of this
                            system is
                            to provide community
                            support for the users during the Covid-19 pandemic situation.
                            The system is based on the current situation where people cannot go outside for
                            safety
                            reasons. Here volunteers can play
                            a vital role by providing services during the lockdown.</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/icons/magnifier-love.svg" class="py-5">
                        <h4 class="h5 py-3 fw-bold">Reporting Services</h4>
                        <p class="text-justify py-3 small">If any kind of change, update or
                            adjustment is made for the
                            app the users will get direct notification about this, they
                            also can report or complain about services if it’s not good.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end of section-4 -->


    <!-- footer -->
</div>
@endsection