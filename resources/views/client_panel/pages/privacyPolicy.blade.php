@extends('client_panel.component.layout')

@section('title', 'Privacy Policy')

@section('content')

    <div class="bg-[url('assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
        <div
            class="bg-[rgba(0,0,0,0.7)] w-full gap-1 pt-32 md:pt-12 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
            <img data-aos="fade-up" class="md:w-96 w-60" src="{{ asset('assets/static/logo_white.png') }}" alt="">
            <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
            <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
            <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

            <div class="flex flex-col md:flex-row justify-center md:gap-10 gap-5 py-16">
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Smart Electric <br> Vehicle</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-8 h-8 border rounded pt-1 border-red-500" viewBox="0 0 24 24">
                        <path d="M3 12H7V21H3V12ZM17 8H21V21H17V8ZM10 2H14V21H10V2Z"></path>
                    </svg>
                    <a class="text-xl text-white font-bold" href="">High Speed</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-8 h-8 border rounded pt-1 border-red-500" viewBox="0 0 24 24">
                        <path d="M3 12H7V21H3V12ZM17 8H21V21H17V8ZM10 2H14V21H10V2Z"></path>
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Low Speed</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Eco Friendly</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Li-ion Battery</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Lead Batteries </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10">
        <div class="w-[60vw]">
            <p class="text-3xl font-bold tracking-wider pb-5 text-red-500">Privacy Policy</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800">EVtejas.com recognises the importance of maintaining your privacy.
                    We value your privacy and appreciate your trust in us. This Policy describes how we treat user
                    information we collect on <a class="text-red-500" href="//evtejas.com">https://www.evtejas.com</a> and
                    other offline sources. This Privacy Policy applies to current and former visitors to our website and to
                    our online customers. By visiting and/or using our website, you agree to this Privacy Policy.</p>
                <p class="font-semibold text-slate-800">EVtejas.com is a property of Kamakhya Worldwide Technology Private
                    Limited, an Indian Company registered under the Companies Act, 2013 having its corporate office at 23,
                    1st & 2nd Floor, Panchkuin Road, Connaught Place, New Delhi, Delhi - 110 001.</p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Information we collect</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800"><span class="font-bold">Contact information :</span> We might
                    collect your name, email, mobile number, phone number, street, city, state, pincode, country and ip
                    address.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">Payment and billing information :</span> We
                    might collect your billing name, billing address and payment method when you buy a product. We NEVER
                    collect your credit card number or credit card expiry date or other details pertaining to your credit
                    card on our website. Credit card information will be obtained and processed by our online payment
                    partner.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">Information you post :</span>We collect
                    information you post in a public space on our website or on a third-party social media site belonging to
                    evtejas.com.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">Demographic information :</span>We may
                    collect demographic information about you, your like, your intend to participate in, products you buy,
                    or any other information provided by your during the use of our website. We might collect this as a part
                    of a survey also.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">Other information :</span>If you use our
                    website, we may collect information about your IP address and the browser you're using. We might look at
                    what site you came from, duration of time spent on our website, pages accessed or what site you visit
                    when you leave us. We might also collect the type of mobile device you are using, or the version of the
                    operating system your computer or device is running. </p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">We collect information in different ways.</p>
            <ul class="flex list-disc flex-col gap-3 pl-8">
                <li class="font-semibold text-slate-800">We collect information directly from you when you register for an
                    account or buy the products. We also collect information if you post a comment on our websites or ask us
                    a question through phone or email.</li>
                <li class="font-semibold text-slate-800">We use tracking tools like Google Analytics, Google Webmaster,
                    browser cookies and web beacons for collecting information about your usage of our website. </li>
                <li class="font-semibold text-slate-800">We get information about you from third parties. For example, if
                    you use an integrated social media feature on our websites. The third-party social media site will give
                    us certain information about you. This could include your name and email address.</li>
            </ul>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Use of your personal information</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information to contact you :</span>
                    We might use the information you provide to contact you for confirmation of a purchase on our website or
                    for other promotional purposes</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information to respond to your
                        requests or questions :</span> We might use your information to confirm your registration and
                    bookings, answer of your queries and requests etc. </p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information to improve our products
                        and services :</span> We might use your information to customize your experience with us. This could
                    include displaying content based upon your preferences.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information to look at site trends
                        and customer interests :</span> We may use your information to make our website and products better.
                    We may combine information we get from you with information about you we get from third parties.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information for security purposes
                        :</span> We may use information to protect our company, our customers, or our websites.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information for marketing
                        purposes</span> We might send you information about special promotions or offers. We might also tell
                    you about new features or products. These might be our own offers or products, or third-party offers or
                    products we think you might find interesting. Or, for example, if you buy products from us we'll enroll
                    you in our newsletter. </p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We use information to send you transactional
                        communications :</span> We might send you emails or SMS about your account or a product purchase.
                </p>
            </div>
            <p class="font-semibold text-slate-800 text-red-500 py-2">Note :- We use information as otherwise permitted by
                law.</p>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Sharing of information with third-parties</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800"><span class="font-bold">We will share information with third
                        parties who perform services on our behalf : </span>We share information with vendors who help us
                    manage our online registration process or payment processors or transactional message processors. Some
                    vendors may be located outside of India.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We will share information with the bankers
                        : </span>We share your information with our banking partners and other NBFC parties responsible for
                    fulfilling the purchase obligation. The Bank partners and other NBFC parties may use the information we
                    give them as described in their privacy policies. </p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We will share information with our
                        business partners : </span>This includes a third party who provide or sponsor a product or service,
                    or our distributors or who operates our Shoppe or showroom where we hold business. Our partners use the
                    information we give them as described in their privacy policies.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We may share information if we think we
                        have to in order to comply with the law or to protect ourselves : </span>We will share information
                    to respond to a court order or subpoena. We may also share it if a government agency or investigatory
                    body requests. Or, we might also share information when we are investigating potential fraud. </p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We may share information with any
                        successor to all or part of our business : </span>For example, if part of our business is sold we
                    may give our customer list as part of that transaction.</p>
                <p class="font-semibold text-slate-800"><span class="font-bold">We may share your information for reasons
                        not described in this policy : </span>We will tell you before we do this.</p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Email Opt-Out</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800"><span class="font-bold">You can opt out of receiving our marketing
                        emails</span>To stop receiving our promotional emails, please email unsubscriber@evtejas.com. It may
                    take about ten days to process your request. Even if you opt out of getting marketing messages, we will
                    still be sending you transactional messages through email and SMS about your purchases.</p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Third party sites </p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800">If you click on one of the links to third party websites, you may
                    be taken to websites we do not control. This policy does not apply to the privacy practices of those
                    websites. Read the privacy policy of other websites carefully. We are not responsible for these third
                    party sites.</p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Grievance Officer</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800">In accordance with Information Technology Act 2000 and rules made
                    there under, the name and contact details of the Grievance Officer are provided below:</p>
                <div class="">
                    <p class="font-bold text-slate-800">Mrs. Sarita Chanana</p>
                    <p class="font-bold text-slate-800">23, 1st Floor, Panchkuin road</p>
                    <p class="font-bold text-slate-800">Connaught Place- RK Ashram,</p>
                    <p class="font-bold text-slate-800">New Delhi- 110001.</p>
                    <p class="font-bold text-slate-800">Phone: <a href="tel:+919870368567" class="text-red-500">+91-9870368567</a></p>
                    <p class="font-bold text-slate-800">Email: <a href="mailto:sales@evtejas.com" class="text-red-500">sales@evtejas.com</a></p>
                </div>
                <p class="font-semibold text-slate-800">If you have any questions about this Policy or other privacy
                    concerns, you can also email us at <a href="mailto:care@evtejas.com"
                        class="text-red-500">care@evtejas.com </a></p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Updates to this policy</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800">This Privacy Policy was last updated on 25.01.2024. From time to
                    time we may change our privacy practices. We will notify you of any material changes to this policy as
                    required by law. We will also post an updated copy on our website. Please check our site periodically
                    for updates.</p>
            </div>
            <p class="text-2xl font-bold tracking-wider py-5 text-red-500">Jurisdiction</p>
            <div class="flex flex-col gap-3 pl-2">
                <p class="font-semibold text-slate-800">If you choose to visit the website, your visit and any dispute over
                    privacy is subject to this Policy and the website's terms of use. In addition to the foregoing, any
                    disputes arising under this Policy shall be governed by the laws of India. The court of Delhi shall have
                    the competent jurisdiction to entertain the dispute under this policy.</p>
            </div>
        </div>
    </div>

@endsection
