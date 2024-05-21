@extends('ApplicationView.AppViewLayout.AppViewLayout')
@section('appContent')
<div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="dashboard__content__wraper">
                        <div class="dashboard__section__title">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__1.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">900</span>+

                                            </div>
                                            <p>Enrolled Courses</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__2.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">500</span>+

                                            </div>
                                            <p>Active Courses</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__3.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">300</span>k

                                            </div>
                                            <p>Complete Courses</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__4.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">1500</span>+

                                            </div>
                                            <p>Total Courses</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__3.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">30</span>k

                                            </div>
                                            <p>Total Students</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                <div class="dashboard__single__counter">
                                    <div class="counterarea__text__wraper">
                                        <div class="counter__img">
                                            <img loading="lazy" src="../assets/img/counter/counter__4.png" alt="counter">
                                        </div>
                                        <div class="counter__content__wraper">
                                            <div class="counter__number">
                                                <span class="counter">90,000</span>K+

                                            </div>
                                            <p>Total Earning</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="dashboard__admin__report__wrap">
                        <div class="dashboard__admin__report dashboard__linechart">
                            <div class="dashboard__admin__report__top">
                                <div class="dashboard__section__title">
                                    <h4>Dashboard</h4>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>HTML</option>
                                        <option value="1">CSS</option>
                                        <option value="2">Javascript</option>
                                        <option value="3">PHP</option>
                                        <option value="4">WordPress</option>
                                    </select>
                                </div>
                            </div>
                            <canvas id="lineChart"></canvas>
                        </div>
                        <div class="dashboard__admin__report dashboard__piechart">
                            <div class="dashboard__admin__report__top">

                                <div class="dashboard__section__title">
                                    <h4>Traffic</h4>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Today</option>
                                        <option value="1">Weekly</option>
                                        <option value="2">Monthly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="dashboard__content__wraper admin__content__wrapper">
                                <div class="dashboard__section__title">
                                    <h4>Popular Instructor</h4>
                                    <a href="../course.html">See More...</a>
                                </div>
                                <div class="dashboard__popular__instructor">

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/teacher/teacher__1.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="../instructor-details.html">Sanki Jho</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <i class="icofont-chat"></i>
                                                    25,895 Reviews
                                                </li>
                                                <li>
                                                    <i class="icofont-student-alt"></i>
                                                    692 Students
                                                </li>
                                                <li>
                                                    <i class="icofont-video-alt"></i>
                                                    15+ Courses
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/teacher/teacher__2.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="../instructor-details.html">Nidmjae Mollin</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <i class="icofont-chat"></i>
                                                    21,895 Reviews
                                                </li>
                                                <li>
                                                    <i class="icofont-student-alt"></i>
                                                    95 Students
                                                </li>
                                                <li>
                                                    <i class="icofont-video-alt"></i>
                                                    10+ Courses
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/teacher/teacher__3.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="../instructor-details.html">Nidmjae Mollin</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <i class="icofont-chat"></i>
                                                    17,895 Reviews
                                                </li>
                                                <li>
                                                    <i class="icofont-student-alt"></i>
                                                    325 Students
                                                </li>
                                                <li>
                                                    <i class="icofont-video-alt"></i>
                                                    20+ Courses
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/teacher/teacher__4.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="../instructor-details.html">Sndi Jac</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <i class="icofont-chat"></i>
                                                    17,895 Reviews
                                                </li>
                                                <li>
                                                    <i class="icofont-student-alt"></i>
                                                    325 Students
                                                </li>
                                                <li>
                                                    <i class="icofont-video-alt"></i>
                                                    45+ Courses
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/teacher/teacher__5.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="../instructor-details.html">Sndi Jac</a>
                                            </h4>
                                            <ul>
                                                <li>
                                                    <i class="icofont-chat"></i>
                                                    17,895 Reviews
                                                </li>
                                                <li>
                                                    <i class="icofont-student-alt"></i>
                                                    325 Students
                                                </li>
                                                <li>
                                                    <i class="icofont-video-alt"></i>
                                                    45+ Courses
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="dashboard__content__wraper admin__content__wrapper">

                                <div class="dashboard__section__title">
                                    <h4>Recent Course</h4>
                                    <a href="../course.html">See More...</a>
                                </div>

                                <div class="dashboard__recent__course">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/grid/grid_1.png" alt="grid"></a>

                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Complete Python Zero to Hero in Python.</a></h3>
                                            </div>
                                            <div class="dashboard__recent__course__meta">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-teacher"></i> <a href="../instructor-details.html">Jon Ron</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-book-alt"></i> 9 Lesson
                                                    </li>

                                                    <li>
                                                        <i class="icofont-clock-time"></i> 3 hr 30 min
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/grid/grid_2.png" alt="grid"></a>

                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur.</a></h3>
                                            </div>
                                            <div class="dashboard__recent__course__meta">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-teacher"></i> <a href="../instructor-details.html">Jon Ron</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-book-alt"></i> 9 Lesson
                                                    </li>

                                                    <li>
                                                        <i class="icofont-clock-time"></i>2 hr 30 min
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/grid/grid_3.png" alt="grid"></a>

                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html">Voluptatum eius quo consectetur atque.</a></h3>
                                            </div>
                                            <div class="dashboard__recent__course__meta">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-teacher"></i> <a href="../instructor-details.html">Jon Ron</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-book-alt"></i> 5 Lesson
                                                    </li>

                                                    <li>
                                                        <i class="icofont-clock-time"></i> 1 hr 30 min
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/grid/grid_4.png" alt="grid"></a>

                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Sapiente recusandae nemo sint hic iste!</a></h3>
                                            </div>
                                            <div class="dashboard__recent__course__meta">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-teacher"></i> <a href="../instructor-details.html">Mini Ron</a>
                                                    </li>
                                                    <li>
                                                        <i class="icofont-book-alt"></i> 7 Lesson
                                                    </li>

                                                    <li>
                                                        <i class="icofont-clock-time"></i> 3 hr 30 min
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="dashboard__content__wraper admin__content__wrapper">
                                <div class="dashboard__section__title">
                                    <h4>Notice Board</h4>
                                    <a href="../course.html">See More...</a>
                                </div>


                                <div class="dashboard__recent__course dashboard__notice__board">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/blog/blog_6.png" alt="grid"></a>
                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero velit quos dolore voluptatem...</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard__recent__course dashboard__notice__board">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/blog/blog_7.png" alt="grid"></a>
                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero velit quos dolore aedgeds...</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard__recent__course dashboard__notice__board">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/blog/blog_8.png" alt="grid"></a>
                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero velit quos dolore wdedged...</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard__recent__course dashboard__notice__board">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/blog/blog_9.png" alt="grid"></a>
                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero velit quos dolore nidelsd...</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard__recent__course dashboard__notice__board">
                                    <div class="dashboard__recent__course__single">
                                        <div class="dashboard__recent__course__img">
                                            <a href="../course-details.html"><img loading="lazy" src="../assets/img/blog/blog_4.png" alt="grid"></a>
                                        </div>
                                        <div class="dashboard__recent__course__content">
                                            <div class="dashboard__recent__course__heading">
                                                <h3><a href="../course-details.html"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero velit quos dolore midnied...</a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="dashboard__content__wraper admin__content__wrapper">
                                <div class="dashboard__section__title">
                                    <h4>Notifications</h4>
                                    <a href="../course.html">See More...</a>
                                </div>

                                <div class="dashboard__popular__instructor dashboard__notificatoin__wrap">

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/dashbord/profile.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="#">latest resume has been updated!</a>
                                            </h4>
                                            <span>1 Hour Ago</span>
                                        </div>
                                    </div>

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/dashbord/lock.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="#">Password has been changed 3 times</a>
                                            </h4>
                                            <span>2 Hour Ago</span>
                                        </div>
                                    </div>

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/dashbord/verify.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="#">Account has been created successfully</a>
                                            </h4>
                                            <span>50 Min Ago</span>
                                        </div>
                                    </div>


                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/dashbord/success.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="#">Successfully applied for a job Developer</a>
                                            </h4>
                                            <span>30 Min Ago</span>
                                        </div>
                                    </div>

                                    <div class="dashboard__popular__instructor__single">
                                        <div class="dashboard__popular__instructor__img">
                                            <img loading="lazy" src="../assets/img/dashbord/video.png" alt="">
                                        </div>
                                        <div class="dashboard__popular__instructor__content">
                                            <h4>
                                                <a href="#">Multi vendor course updated successfully</a>
                                            </h4>
                                            <span>3 hours Ago</span>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="dashboard__content__wraper">
                        <div class="dashboard__section__title">
                            <h4>Total Feedbacks</h4>
                            <a href="../course.html">See More...</a>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Enrolled</th>
                                                <th>Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><a href="#">Javascript</a></th>
                                                <td>1100</td>
                                                <td>
                                                    <div class="dashboard__table__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="dashboard__table__row">
                                                <th><a href="#">PHP</a></th>
                                                <td>700</td>
                                                <td>
                                                    <div class="dashboard__table__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><a href="#">HTML</a></th>
                                                <td>1350</td>
                                                <td>
                                                    <div class="dashboard__table__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="dashboard__table__row">
                                                <th><a href="#">Graphic</a></th>
                                                <td>1266</td>
                                                <td>
                                                    <div class="dashboard__table__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection