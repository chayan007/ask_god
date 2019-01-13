<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="{{ asset('images/home/under.png') }}" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2></h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="{{ asset('images/home/profile1.png') }}" alt="" height="100px" width="100px"></a>
                        </div>
                        <div class="media-body">
                            <blockquote>This website is the solution to all problems of my life. Oh mighty ones, please keep guiding me more and more.</blockquote>
                            <h3><a href="#">- Luca Pearson</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="{{ asset('images/home/profile2.png') }}" alt="" height="100px" width="100px"></a>
                        </div>
                        <div class="media-body">
                            <blockquote>This site is just wonderful. I die to talk with Devil more and more. Please make Devil active.</blockquote>
                            <h3><a href="">- Abraham Josef</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                    </address>

                    <h2>Address</h2>
                    <address>
                        Valhalla Portal, <br>
                        Dark Alley, <br>
                        Ambrosia Garden, Heaven <br>
                        Mythical Kingdom <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom" id="form_footer">
                    <h2>Drop a Feedback</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="/sendFeedback">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Ask God 2019. All Rights Reserved.</p>
                    {{--<p>Designed by <a target="_blank" href="http://www.themeum.com">God</a></p>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->