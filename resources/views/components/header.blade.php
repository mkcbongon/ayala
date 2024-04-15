<header id="js-header-desktop" class="c-header c-header--desktop is-fixed" data-builtid="0401201202">
    <div id="js-header-background" class="c-header__background c-header-background is-fixed"
        style="height: 112px;">
        <div class="c-header__container">

            {{-- LOGO --}}
            <div class="c-header__container">
                <a href="{{ route('home') }}" class="o-logo" id="logo-link">
                    <img src="{{ asset('ayala/ALI-high-res-logo-PNG-retina-01.png') }}"
                        alt="" id="logo-image"/>
                </a>
                <input type="file" id="logo-input" style="display: none;">

                {{-- NAVBAR --}}
                <div class="c-header__content">
                    <nav id="js-nav-dt" class="nav is-active">
                        <div class="js-nav__link c-nav__link" data-megamenu="0">
                            <a href="{{ route('about') }}" class=""
                            rel="noopener noreferrer">ABOUT US</a>
                        </div>
                        <div class="js-nav__link c-nav__link" data-megamenu="1">
                            <a href="{{ route('premier') }}" class=""
                                rel="noopener noreferrer">AYALA LAND PREMIER</a>
                        </div>
                        <div class="js-nav__link c-nav__link" data-megamenu="2">
                            <a href="{{ route('properties') }}" class=""
                                rel="noopener noreferrer">PROPERTIES</a>
                        </div>
                    </nav>
                </div>
            </div>

            {{-- C O N T A C T --}}
            <div class="c-header__ctas dt">
                {{-- <a href="{{ route('contact') }}" --}}
                <a href="tel:09298597655">
                    <span class="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                      </svg></span></a>
            </div>

            @if(request()->routeIs(['properties', 'property']))
            {{-- A D V E R T I S E  M O D A L --}}
                <div class="c-header__ctas dt">
                    <a href="javascript:void(0);" class="o-button--bordered"  
                    data-bs-toggle="modal"  data-bs-target="#adv"><span></span><span></span><span class="text">
                            Submit your Property!</span></a>
                </div>

                <div class="modal fade" id="adv" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3">Submit your Property</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form id="uploadform" action="{{ route('submitreq') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Display validation errors -->
                                        <input type="hidden" name="unique_id" value="{{ random_int(1000, 9999) }}">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <!-- Input fields for first, middle, and last name -->
                                        <div class="col mb-0">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" id="firstname" name="fname" class="form-control" placeholder="First Name" required/>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="midlename" class="form-label">Middle Name</label>
                                            <input type="text" id="midlename" name="mname" class="form-control" placeholder="Middle Name" required/>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" id="lastname" name="lname" class="form-control" placeholder="Last Name" required/>
                                        </div>
                                        </div>
                                        <!-- Input fields for email and date of birth -->
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="xxxx@xxx.xx" required />
                                            </div>
                                            <div class="col mb-0">
                                                <label for="birth" class="form-label">Date of Birth</label>
                                                <input type="date" id="birth" name="dob" class="form-control" required />
                                            </div>
                                        </div>
                                        <!-- Input field for identification file -->
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="image" class="form-label">Government ID</label>
                                                <input type="file" class="form-control" id="image" name="idcard" required/>
                                            </div>
                                        </div>
                                        <hr class="m-0" />
                                        <div class="row">
                                            <!-- Input field for property name -->
                                            <div class="col mb-3">
                                                <label for="property" class="form-label">Property</label>
                                                <input type="text" id="property" class="form-control" name="property" placeholder="Property Name" required/>
                                            </div>
                                        </div>
                                        <!-- Category dropdown menu -->
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="category" class="form-label">Category</label>
                                                <select id="category" name="category" class="form-select" required>
                                                    <option value="">Select Category</option>
                                                    <option value="Pre-Selling">Pre-Selling</option>
                                                    <option value="RFO">RFO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Type dropdown menu -->
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="type" class="form-label">Type</label>
                                                <select id="type" name="type" class="form-select" required>
                                                    <option value="">Select Type</option>
                                                    <option value="Residential">Residential</option>
                                                    <option value="Commercial">Commercial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Input field for location -->
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" id="location" class="form-control" name="location" placeholder="Location" required />
                                            </div>
                                        </div>
                                        <!-- Input field for price -->
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">₱</span>
                                            <input type="number" class="form-control" id="price" name="price" placeholder="100" aria-label="Amount (to the nearest dollar)" />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea id="description" class="form-control" name="description" required rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="image" class="form-label">Property Images</label>
                                                <input type="file" class="form-control" id="image" name="uploads[]" multiple/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn" style="background-color: #30704c; color: #fff;" 
                                                >Submit</button>
                                    

                                            {{-- modal
                                            <form action="{{ route('uploadreq') }}"  method="POST" enctype="multipart/form-data"> @csrf 
                                                
                                                <input type="hidden" name="req_no" value="{{ random_int(1000, 9999) }}">
                                                <div class="modal fade" id="upload" aria-hidden="true"
                                                    aria-labelledby="modalToggleLabel2" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="modalToggleLabel2"> Images</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <label for="image" class="form-label">Upload Images</label>
                                                                    <input type="file" class="form-control" id="img" name="img[]" multiple/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="submit" class="btn" 
                                                        style="background-color: #30704c; color: #fff;">Submit</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @if(!request()->routeIs(['properties','property']))
            </div>
        @endif



        {{-- DROPDOWN --}}
        <div id="js-meganav__container" class="c-meganav__container">
            <div class="c-mega-menu" data-megamenuid="0" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <a href="{{ route('ourlegacy') }}" class="c-mega-menu__link " style="margin-left: 300px">
                        <h4>OUR LEGACY</h4>
                        <p>Know about Ayala Land's history as an industry pioneer.</p>
                    </a>
                    {{-- <a href="{{ route('careers') }}" class="c-mega-menu__link ">
                        <h4>CAREERS</h4>
                        <p>Join our team of talented individuals; <br>grow your career and participate in the
                            business of enhancing land and enriching lives.</p>
                    </a> --}}
                    <a href="{{ route('awards') }}"
                        class="c-mega-menu__link ">
                        <h4>OUR AWARDS AND CITATIONS</h4>
                        <p>See the list of our distinctions—a proof of our commitment to excellence.</p>
                    </a>
                </div>
            </div>





            <div class="c-mega-menu" data-megamenuid="2" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <a href="{{ route('properties', 'Pre-Selling') }}" class="c-mega-menu__link " style="margin-left: 300px">
                        <h4>FOR SALE</h4>
                        <p>Discover Your Dream Home: Elegant and sophisticated, this property offers unmatched luxury and a prime location for discerning buyers. A true dream home.</p>
                    </a>
                    <a href="{{ route('properties', 'RFO') }}"
                        class="c-mega-menu__link ">
                        <h4>FOR LEASE</h4>
                        <p>Elevate Your Lifestyle: Modern, convenient, and stylish, this leased property provides a luxurious living space with top-notch amenities in a prime location.</p>
                    </a>
                </div>
            </div>



            
            
        </div>
    </div>
</header>


{{-- RESPONSIVE --}}
<header class="c-header c-header--mobile is-fixed">
    <div class="c-header__background--mobile is-fixed">
        <div class="c-header__container [ u-df-mb u-df-mb-jc-sb ] ">
            <a href="https://www.ayalaland.com.ph/" class="o-logo ">
                <img src="{{ asset('ayala/ALI-high-res-logo-PNG-retina-01.png') }}"
                    alt="">
            </a>
            <div class="c-header__ctas [ u-df-mb u-df-mb-ai-c ]">
                <button id="js-search__button"
                    class="js-search__button o-button--icon_text c-search__button c-search__button--mobile"></button>
                <button id="js-menu__button" class="js-menu__button o-button--burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        
        <div id="js-menu__container" class="c-header__content">
            <nav id="js-menu__mainmenu" class="nav nav--mobile">
                <div class="c-nav__link">
                    <a href="javascript:void(0);" rel="noopener noreferrer" class="js-meganav"
                        data-megamenu="00">ABOUT US</a>
                </div>
                <div class="c-nav__link">
                    <a href="javascript:void(0);" rel="noopener noreferrer" class="js-meganav"
                        data-megamenu="01">RESIDENCES</a>
                </div>
            </nav>

            <div id="js-menu__megamenu" class="c-mega-menu--mobile ">
                <div class="box c-mega-menu__links" data-megaid="00">

                    <a href="javascript:void(0);" class="js-back back-0">ABOUT US</a>
                    <a href="https://www.ayalaland.com.ph/about-us/" class="goto_link">
                        Go To About Us Page
                    </a>
                    <a href="https://www.ayalaland.com.ph/our-legacy/" class="c-mega-menu__link dt-col-3">
                        <h4>OUR LEGACY</h4>
                        <p>Know about Ayala Land's history as an industry pioneer.</p>
                    </a>
                    <a href="https://www.ayalaland.com.ph/careers/" class="c-mega-menu__link dt-col-3">
                        <h4>CAREERS</h4>
                        <p>Join our team of talented individuals; <br>grow your career and participate in the
                            business of enhancing land and enriching lives.</p>
                    </a>
                    <a href="https://www.ayalaland.com.ph/our-awards-and-milestones/"
                        class="c-mega-menu__link dt-col-3">
                        <h4>OUR AWARDS AND CITATIONS</h4>
                        <p>See the list of our distinctions—a proof of our commitment to excellence.</p>
                    </a>
                    <a href="https://www.ayalaland.com.ph/investor-relations/"
                        class="c-mega-menu__link dt-col-3">
                        <h4>INVESTOR RELATIONS</h4>
                        <p>View our latest annual report.</p>
                    </a>
                </div>


                

                
                <div class="box c-mega-menu__links" data-megaid="01">
                    <a href="javascript:void(0);" class="js-back back-0">RESIDENCES</a>
                    <div class="[ u-df-dt u-df-dt-jc-sb u-df-dt-fw-w ] ">
                        <div class="c-mega-menu__group-link">
                            <h4>BROWSE<br> BY RESIDENTIAL <br>BRAND</h4>
                            <ul>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>AYALA LAND RESIDENCES</h4>
                            <ul>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/ayala-land-premier/"><span>Ayala
                                            Land Premier</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/alveo/"><span>Alveo</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/avida/"><span>Avida</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/amaia/"><span>Amaia</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/bella-vita/"><span>BellaVita</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>BROWSE<br>BY LOCATION</h4>
                            <ul>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>METRO MANILA</h4>
                            <ul>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/makati-city/"><span>Makati
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/manila-city/"><span>Manila
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/mandaluyong-city/"><span>Mandaluyong
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/muntinlupa-city/"><span>Muntinlupa
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/paranaque-city/"><span>Parañaque
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/pasig-city/"><span>Pasig
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/quezon-city/"><span>Quezon
                                            City</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/residences/taguig-city/"><span>Taguig
                                            City</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>Luzon</h4>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/residences-in-laguna/"><span>Laguna</span></a>
                                </li>
                                <li>
                                    <a href="https://www.ayalaland.com.ph/estates/evo-city/"><span>Evo
                                            City</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/residences-in-batangas-city/"><span>Batangas</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/pampanga/"><span>Pampanga</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>Visayas</h4>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/residences-in-bacolod-city/"><span>Bacolod</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/residences-in-cebu-city/"><span>Cebu</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="c-mega-menu__group-link">
                            <h4>Mindanao</h4>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.ayalaland.com.ph/residences/residences-in-cagayan-de-oro-city/"><span>Cagayan
                                            De Oro</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
            <a href="{{ route('contact') }}"
                class="js-linkDelay o-button--bordered"><span></span><span></span><span class="text">Contact
                    Us</span></a>
        </div>


        {{-- <script>
            function submitntoggle() {
                // Submit the form
                document.getElementById("uploadform").submit();
                
                // Toggle the modal
                var myModal = new bootstrap.Modal(document.getElementById('upload'));
                myModal.toggle();
            }
        </script> --}}

        {{-- <script>
            function submitntoggle() {
                var formData = new FormData(document.getElementById('uploadform'));

                // Send an AJAX request
                fetch('/submitreq', {
                    method: 'POST',
                    body: formData
                })
                
                // Toggle the modal
                var myModal = new bootstrap.Modal(document.getElementById('upload'));
                myModal.toggle();
            }
        </script> --}}
    </div>
</header>