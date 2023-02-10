<section class="background-image request-call-back"
style="background-image: url('{{ asset('frontend/assets/images/bg/contact-bg-1-1.jpg') }}');">
<div class="container">
    <div class="row gx-70">
        <div class="col-lg-6 col-xl-auto pt-3 align-self-end">
           
            <img src="{{ asset('frontend/assets/images/about/contact-1-1.png') }}" alt="contact">
        </div>
        <div class="col-lg-6 col-xl align-self-center py-5">
            <span class="sec-subtitle">How to Grow Business Online</span>
            <h2 class="sec-title mb-3 pb-2">Reqest Call Back</h2>
            <form action="" method="POST" class="ajax-contact">
                <div class="row gx-20">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control style2" name="name" id="name"
                            placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control style2" name="email" id="email"
                            placeholder="Email Address">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control style2" name="number" id="number"
                            placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control style2" name="subject" id="subject"
                            placeholder="Topic">
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control style2" name="message" id="message"
                            placeholder="Discussion"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="vs-btn" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
            <p class="form-messages mb-0 mt-3"></p>
        </div>
    </div>
</div>
</section>