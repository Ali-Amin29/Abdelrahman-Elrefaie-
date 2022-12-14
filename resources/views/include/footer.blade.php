
        <!-- Footer Start -->
        <div class="footer">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-contact text-right">
                                    <h2>تواصل معنا</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>ص.ب &nbsp;3108 – الرمز البريدي &nbsp;11471</p>
                                    <p ><i class="fa fa-phone-alt"></i>جوال &nbsp;&nbsp;<span dir="ltr">+966 55 9556782</span></p>
                                    <p><i class="fa fa-envelope"></i>البريد الالكتروني info@alrefaielawyer.com</p>
                                    <div class="footer-social">
                                        <a href="https://api.whatsapp.com/send?phone=0559556782"><i class="fab fa-whatsapp"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/people/%D9%85%D8%AD%D8%A7%D9%85%D9%8A-%D8%AF%D9%85%D9%86%D8%B5%D9%88%D8%B1-%D8%A7%D9%84%D8%B1%D9%81%D8%A7%D8%B9%D9%8A/100001446142980"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 text-right">
                                <div class="footer-link">
                                    <h2>روابط ذات صلة</h2>
                                    <a href="https://www.moi.gov.sa/">وزارة الداخلية</a>
                                    <a href="http://www.mofa.gov.sa">وزارة الخارجية</a>
                                    <a href="https://www.moj.gov.sa/ar/Pages/default.aspx">وزارة العدل</a>
                                    <a href="https://mci.gov.sa/ar/Pages/default.aspx">وزارة التجارة والصناعة</a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="contact-form">
                                    <div id="success"></div>
                                    {{-- --------------------------- --}}
                                    <form method="post" 
                                    action="{{ route('index') }}" name="sentMessage" id="contactForm" novalidate="novalidate">
                                        @csrf
                                        <div class="control-group">
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group">
                                            <textarea name="content" class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div>
                                            <button  class="btn" id="contact-2" type="submit" id="sendMessageButton">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="col-md-6 footer-newsletter">
                                    <div style="display:flex ;">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.173962749663!2d46.507352499999996!3d24.652139700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f219107616f39%3A0x2dd7627c420e8a95!2zQ0xFQVIgTWFya2V0aW5nIEFnZW5jeSDZiNmD2KfZhNipINmD2YTZitixINmE2YTYqtiz2YjZitmC!5e0!3m2!1sen!2ssa!4v1668812363705!5m2!1sen!2ssa" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-12" dir="ltr">
                        <p> &copy; <a href="#">GfourA</a>. All Right Reserved </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
