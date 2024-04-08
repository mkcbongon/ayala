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
                        {{-- @if(request()->routeIs(['home', 'adminhome'])) --}}
                        <div class="js-nav__link c-nav__link" data-megamenu="0">
                            <a href="{{ route('about') }}" class=""
                            rel="noopener noreferrer">ABOUT US</a>
                        </div>
                        <div class="js-nav__link c-nav__link" >
                            <a href="{{ route('premier') }}" class=""
                                rel="noopener noreferrer">AYALA LAND PREMIER</a>
                        </div>
                        <div class="js-nav__link c-nav__link" data-megamenu="2">
                            <a href="{{ route('properties') }}" class=""
                                rel="noopener noreferrer">PROPERTIES</a>
                        </div>
                        {{-- @endif --}}
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
                <a href="{{ route('contact') }}" class="o-button--bordered"  
                data-bs-toggle="modal"  data-bs-target="#adv"><span></span><span></span><span class="text">
                        Advertise with us!</span></a>
            </div>

            <div class="modal fade" id="adv" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel3">Submit your Property</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Fist Name" />
                            </div>
                            <div class="col mb-0">
                                <label for="mname" class="form-label">Middle Name</label>
                                <input type="text" id="mname" class="form-control" placeholder="Last Name" />
                            </div>
                            <div class="col mb-0">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Last Name" />
                            </div>
                        </div>
                      <div class="row g-2">
                        <div class="col mb-0">
                          <label for="emailLarge" class="form-label">Email</label>
                          <input type="email" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
                        </div>
                        <div class="col mb-0">
                          <label for="dobLarge" class="form-label">DOB</label>
                          <input type="date" id="dobLarge" class="form-control" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                            <label for="identification" class="form-label">Identification</label>
                            <input type="file" class="form-control" id="inputGroupFile02" name="identification"/>
                        </div>
                      </div>
                      <hr class="m-0" />
                        <div class="row">
                            <div class="col mb-3">
                              <label for="name" class="form-label">Property</label>
                              <input type="text" id="property" class="form-control" name="name" placeholder="Property Name" />
                            </div>
                          </div>
                          {{-- !! --}}

                          {{-- category --}}
                          <input type="hidden" id="categoryInput" name="category"/>
                          <div class="row">
                            <div class="col mb-3">
                              <button id="categoryButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                  Category
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('Pre-Selling', 'categoryButton')">Pre-Selling</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('RFO', 'categoryButton')">RFO</a></li>
                            </ul>
                            </div>
                          </div>
                          {{-- !! --}}

                          {{-- type --}}
                          <input type="hidden" id="typeInput" name="type"/>
                          <div class="row">
                            <div class="col mb-3">
                              <button id="typeButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                  Type
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Residential', 'typeButton')">Residential</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Commercial', 'typeButton')">Commercial</a></li>
                            </ul>
                            </div>
                          </div>
                          {{-- !! --}}
                        
                          {{-- location --}}
                          <div class="row">
                            <div class="col mb-3">
                              <label for="location" class="form-label">Location</label>
                              <input type="text" id="location" class="form-control" name="location" placeholder="Location" />
                            </div>
                          </div>
                          {{-- !! --}}

                          {{-- price --}}
                          <div class="input-group input-group-merge">
                            <span class="input-group-text">₱</span>
                            <input type="number" class="form-control" name="price"
                              placeholder="100" aria-label="Amount (to the nearest dollar)" />
                            <span class="input-group-text">.00</span>
                          </div>
                          {{--  --}}

                          {{-- size --}}
                          <input type="hidden" id="selectedSizesInput" name="selected_sizes" />
                          <div class="card-body">
                            <div class="row gy-3">
                              <div class="col-md">
                                <small class="text-light fw-medium d-block">Size</small>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="studioCheckbox" name="size[]" value="Studio" />
                                  <label class="form-check-label" for="studioCheckbox">Studio</label>
                                </div>
                                <div class="form-check form-check-inline mt-3">
                                  <input class="form-check-input" type="checkbox" id="1brCheckbox" name="size[]" value="1BR"/>
                                  <label class="form-check-label" for="1brCheckbox">1BR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="2brCheckbox" name="size[]" value="2BR"/>
                                  <label class="form-check-label" for="2brCheckbox">2BR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="3brCheckbox" name="size[]" value="3BR"/>
                                  <label class="form-check-label" for="3brCheckbox">3BR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="3brdeluxeCheckbox" name="size[]" value="3BR Deluxe"/>
                                  <label class="form-check-label" for="3brdeluxeCheckbox">3BR Deluxe</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="3brpremierCheckbox" name="size[]" value="3BR Premier"/>
                                  <label class="form-check-label" for="3brpremierCheckbox">3BR Premier</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="executive1brCheckbox" name="size[]" value="Executive"/>
                                  <label class="form-check-label" for="executive1brCheckbox">Executive 1BR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="houseandlotCheckbox" name="size[]" value="House and Lot"/>
                                  <label class="form-check-label" for="houseandlotCheckbox">House and Lot</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="lotonlyCheckbox" name="size[]" value="Lot Only"/>
                                  <label class="form-check-label" for="lotonlyCheckbox">Lot Only</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="penthouseCheckbox" name="size[]" value="Pent House"/>
                                  <label class="form-check-label" for="penthouseCheckbox">Pent House</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- size --}}

                          {{-- description --}}
                          <div class="row">
                            <div class="col mb-3">
                              <label for="description" class="form-label">Description</label>
                              <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                            </div>
                          </div>
                          {{--  --}}

                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn" style="background-color: #30704c; color: #fff;">Submit</button>
                    </div>
                  </div>
                </div>
            </div>
            @endif
        
        </div>



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


            
            {{-- <div class="c-mega-menu" data-megamenuid="1" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <div class="c-mega-menu__group-link">
                        <h4>BROWSE<br> BY RESIDENTIAL <br>BRAND</h4>
                        <ul>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>AYALA LAND RESIDENCES</h4>
                        <ul>
                            <li>
                                <a href="{{ route('premier') }}"><span>Ayala
                                        Land Premier</span></a>
                            </li>
                            <li>
                                <a href="{{ route('alveo') }}"><span>Alveo</span></a>
                            </li>
                            <li>
                                <a href="{{ route('avida') }}"><span>Avida</span></a>
                            </li>
                            <li>
                                <a href="{{ route('amaia') }}"><span>Amaia</span></a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('bellavita') }}"><span>BellaVita</span></a>
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
                                <a href="{{ route('makati') }}"><span>Makati
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
                                    href="{{ route('batangas') }}"><span>Batangas</span></a>
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
            </div> --}}



            <div class="c-mega-menu" data-megamenuid="2" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <a href="{{ route('properties', 'RFO') }}" class="c-mega-menu__link " style="margin-left: 300px">
                        <h4>FOR SALE</h4>
                        <p>Discover Your Dream Home: Elegant and sophisticated, this property offers unmatched luxury and a prime location for discerning buyers. A true dream home.</p>
                    </a>
                    <a href="{{ route('properties', 'Pre-Selling') }}"
                        class="c-mega-menu__link ">
                        <h4>FOR LEASE</h4>
                        <p>Elevate Your Lifestyle: Modern, convenient, and stylish, this leased property provides a luxurious living space with top-notch amenities in a prime location.</p>
                    </a>
                </div>
            </div>



            {{-- <div class="box c-mega-menu__links" data-megaid="03">
                <div class="box">
                    <div class="c-mega-menu__tabs is-active">
                        <a href="javascript:void(0);" class="js-back back-0">Businesses</a>
                        <div class="js-tab mb c-mega-menu__tab" data-tabcontent="00">
                            <h4>RESIDENCES</h4>
                            <p>Condominiums and homes in strategic locations.</p>
                        </div>
                        <div class="js-tab mb c-mega-menu__tab" data-tabcontent="01">
                            <h4>OFFICES</h4>
                            <p>Corporate centers and co-working facilities for a diverse clientele.</p>
                        </div>
                        <div class="js-tab mb c-mega-menu__tab" data-tabcontent="02">
                            <h4>MALLS</h4>
                            <p>Shopping districts with innovative retail and entertainment options</p>
                        </div>
                        <div class="js-tab mb c-mega-menu__tab" data-tabcontent="03">
                            <h4>HOTELS &amp; RESORTS</h4>
                            <p>Accommodations for business and leisure</p>
                        </div>
                        <div class="js-tab mb c-mega-menu__tab" data-tabcontent="04">
                            <h4>SERVICE BUSINESSES</h4>
                            <p>Key support organizations of Ayala Land </p>
                        </div>
                    </div>

                    <div class="c-mega-menu__tabs">
                        <div class="js-tab-content c-mega-menu__tab-content " data-tabid="00">
                            <a href="javascript:void(0);" class="js-back back-1">
                                RESIDENCES </a>
                            <a href="https://www.ayalaland.com.ph/residences-overview/" class="goto_link">
                                Go To RESIDENCES Page
                            </a>
                            <div class="c-mega-menu__row">
                                <h4>BROWSE BY <br> RESIDENTIAL BRAND</h4>
                                <div class="c-mega-menu__inner-col">
                                    <div class="">
                                        <h4></h4>
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/ayala-land-premier/">Ayala
                                                    Land Premier</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/alveo/">Alveo</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/avida/">Avida</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/amaia/">Amaia</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/bella-vita/">BellaVita</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="c-mega-menu__row">
                                <h4>BROWSE BY LOCATION</h4>
                                <div class="c-mega-menu__inner-col">
                                    <div class="">
                                        <h4>METRO MANILA</h4>
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/makati-city/">Makati
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/manila-city/">Manila
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/mandaluyong-city/">Mandaluyong
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/muntinlupa-city/">Muntinlupa
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/paranaque-city/">Parañaque
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/pasig-city/">Pasig
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/quezon-city/">Quezon
                                                    City</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/taguig-city/">Taguig
                                                    City</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4>REGIONAL</h4>
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/luzon/">Luzon</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/visayas/">Visayas</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/residences/mindanao/">Mindanao</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="js-tab-content c-mega-menu__tab-content " data-tabid="01">
                            <a href="javascript:void(0);" class="js-back back-1">
                                OFFICES </a>
                            <a href="https://www.ayalaland.com.ph/offices/" class="goto_link">
                                Go To OFFICES Page
                            </a>
                            <div class="c-mega-menu__row">
                                <h4>BROWSE BY LOCATION</h4>
                                <div class="c-mega-menu__inner-col">
                                    <div class="">
                                        <h4></h4>
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/offices/#metro-manila">Metro
                                                    Manila</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/offices/#luzon">Luzon</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/offices/#visayas-and-mindanao">Visayas
                                                    &amp; Mindanao</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="js-tab-content c-mega-menu__tab-content " data-tabid="02">
                            <a href="javascript:void(0);" class="js-back back-1">
                                MALLS </a>
                            <a href="https://www.ayalaland.com.ph/malls/" class="goto_link">
                                Go To MALLS Page
                            </a>
                            <div class="c-mega-menu__row">
                                <h4>BROWSE BY LOCATION</h4>
                                <div class="c-mega-menu__inner-col">
                                    <div class="">
                                        <h4></h4>
                                        <ul>
                                            <li>
                                                <a href="https://www.ayalaland.com.ph/malls/#metro-manila">Metro
                                                    Manila</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/malls/#luzon">Luzon</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/malls/#visayas-and-mindanao">Visayas
                                                    &amp; Mindanao</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="js-tab-content c-mega-menu__tab-content " data-tabid="03">
                            <a href="javascript:void(0);" class="js-back back-1">
                                HOTELS &amp; RESORTS </a>
                            <a href="https://www.ayalaland.com.ph/hotels-resorts/" class="goto_link">
                                Go To HOTELS &amp; RESORTS Page
                            </a>
                            <div class="c-mega-menu__row">
                                <h4>BROWSE BY LOCATION</h4>
                                <div class="c-mega-menu__inner-col">
                                    <div class="">
                                        <h4></h4>
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/hotels-resorts/#metro-manila">Metro
                                                    Manila</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/hotels-resorts/#luzon">Luzon</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.ayalaland.com.ph/hotels-resorts/#visayas-and-mindanao">Visayas
                                                    &amp; Mindanao</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="js-tab-content c-mega-menu__tab-content " data-tabid="04">
                            <a href="javascript:void(0);" class="js-back back-1">
                                SERVICE BUSINESSES </a>
                            <a href="https://www.ayalaland.com.ph/service-businesses/" class="goto_link">
                                Go To SERVICE BUSINESSES Page
                            </a>

                            <div class="box">
                                <a href="https://www.ayalaland.com.ph/service-businesses/#apmc"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>APMC</h4>
                                    <p>Ayala Property Management Corporation</p>
                                </a>
                                <a href="https://www.ayalaland.com.ph/service-businesses/#mdc"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>MDC</h4>
                                    <p>Makati Development Corporation</p>
                                </a>
                                <a href="https://www.ayalaland.com.ph/service-businesses/#directpower"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>DIRECT POWER</h4>
                                    <p>Our power services</p>
                                </a>
                                <a href="https://www.ayalaland.com.ph/service-businesses/#airswift"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>AIRSWIFT</h4>
                                    <p>Our airline services</p>
                                </a>
                                <a href="https://www.ayalaland.com.ph/service-businesses/#merkado"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>MERKADO SUPERMARKET</h4>
                                    <p>Our supermarket joint venture with Puregold</p>
                                </a>
                                <a href="https://www.ayalaland.com.ph/service-businesses/#ayalalandlogistics"
                                    class="c-mega-menu__link dt-col-5">
                                    <h4>AyalaLand Logistics</h4>
                                    <p>Our industrial parks developer and operator</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
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
    </div>
</header>