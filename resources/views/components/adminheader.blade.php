<header id="js-header-desktop" class="c-header c-header--desktop is-fixed" data-builtid="0401201202">
    <div id="js-header-background" class="c-header__background c-header-background is-fixed"
        style="height: 112px;">
        <div class="c-header__container">

            {{-- LOGO --}}
            <div class="c-header__container">
                <a href="{{ route('adminhome') }}" class="o-logo" id="logo-link">
                    <img
                        src="{{ asset('ayala/ALI-high-res-logo-PNG-retina-01.png') }}"
                        alt=""
                        id="logo-image"
                    />
                </a>
                <input type="file" id="logo-input" style="display: none;">

                {{-- NAVBAR --}}
            <div class="c-header__content">

                <nav id="js-nav-dt" class="nav is-active">
                    @if(request()->routeIs(['home', 'adminhome']))
                    <div class="js-nav__link c-nav__link" data-megamenu="0">
                        <a href="{{ route('about') }}" class=""
                           rel="noopener noreferrer">ABOUT US</a>
                     </div>
                     <div class="js-nav__link c-nav__link" >
                        <a href="{{ route('adminpremier') }}" class=""
                            rel="noopener noreferrer">AYALA LAND PREMIER</a>
                    </div>
                    <div class="js-nav__link c-nav__link" >
                        <a href="{{ route('premierproperties') }}" class=""
                            rel="noopener noreferrer">PROPERTIES</a>
                    </div>
                    @endif
                </nav>
                
                
            </div>
            </div>

            <div class="c-header__ctas dt">
                <button id="save-all-button" class="o-button--bordered" style="margin-right: 20px; background: #06ca0f">
                    <span></span><span></span><span class="text">SAVE ALL</span>
                </button>
            
                <a href="#" id="logout-link" class="o-button--bordered" style="background: #df0000;">
                    <span></span>
                    <span></span>
                    <span class="text">LOGOUT</span>
                </a>
            </div>
        </div>


        {{-- DROPDOWN --}}
        <div id="js-meganav__container" class="c-meganav__container">
            <div class="c-mega-menu" data-megamenuid="0" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <a href="{{ route('adminlegacy') }}" class="c-mega-menu__link " style="margin-left: 300px">
                        <h4>OUR LEGACY</h4>
                        <p>Know about Ayala Land's history as an industry pioneer.</p>
                    </a>
                    {{-- <a href="{{ route('admincareers') }}" class="c-mega-menu__link ">
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

            <div class="c-mega-menu" data-megamenuid="1" style="opacity: 0">
                <div class="[ u-df-dt u-df-dt-fw-w ]">
                    <div class="c-mega-menu__group-link">
                        <h4>ESTABLISHED ESTATES</h4>
                        <ul>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/makati-central-business-district/">
                                    <span>Makati Central Business District</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/circuit-makati/">
                                    <span>Circuit Makati</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/bonifacio-global-city/">
                                    <span>Bonifacio Global City</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/ayala-alabang/">
                                    <span>Ayala Alabang</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/cebu-park-district/">
                                    <span>Cebu Park District</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/nuvali/">
                                    <span>Nuvali</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>ESTATES IN METRO MANILA</h4>
                        <ul>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/arca-south/">
                                    <span>Arca South</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/cloverleaf/">
                                    <span>Cloverleaf</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/vertis-north/">
                                    <span>Vertis North</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/south-park-district/">
                                    <span>South Park District</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/the-junction/">
                                    <span>The Junction Place</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/parklinks/">
                                    <span>Parklinks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>TOURISM ESTATES</h4>
                        <ul>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/lio/">
                                    <span>Lio</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/sicogon-island/">
                                    <span>Sicogon Island</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>ESTATES IN LUZON</h4>
                        <ul>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/altaraza/">
                                    <span>Altaraza</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/alviera/">
                                    <span>Alviera</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/vermosa/">
                                    <span>Vermosa</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/evo-city/">
                                    <span>Evo City</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/cresendo/">
                                    <span>Cresendo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>ESTATES IN VISAYAS &amp; MINDANAO</h4>
                        <ul>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/abreeza/">
                                    <span>Abreeza</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/atria-park-district/">
                                    <span>Atria Park District</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/capitol-central/">
                                    <span>Capitol Central</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/centrio/">
                                    <span>Centrio</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/north-point/">
                                    <span>North Point</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/azuela-cove/">
                                    <span>Azuela Cove</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/seagrove/">
                                    <span>Seagrove</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ayalaland.com.ph/estates/south-coast-city/">
                                    <span>South Coast City</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <div class="c-mega-menu" data-megamenuid="2" style="opacity: 0;">
                <div class="[ u-df-dt  u-df-dt-fw-w ] ">
                    <div class="c-mega-menu__group-link">
                        <h4>BROWSE<br> BY RESIDENTIAL <br>BRAND</h4>
                        <ul>
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>AYALA LAND RESIDENCES</h4>
                        <ul>
                            @foreach ($header as $residential)
                                <li>
                                    <a href="
                                        @if ($residential['residential'] == 'Ayala Land Premier')
                                            {{ route('adminpremier') }}">
                                            @elseif ($residential['residential'] == 'Alveo')
                                                {{ route('alveo') }}">
                                                @elseif ($residential['residential'] == 'Avida')
                                                    {{ route('avida') }}">
                                                    @elseif ($residential['residential'] == 'Amaia')
                                                        {{ route('amaia') }}">
                                                        @elseif ($residential['residential'] == 'Bella Vita')
                                                            {{ route('bellavita') }}">
                                        @else
                                        #"
                                        @endif
                                        
                                        <span>{{ $residential['residential'] }}</span>
                                    </a>
                                </li>
                            @endforeach
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
                            @foreach ($header as $metro)
                                <li>
                                    <a href="
                                        @if ($metro['metro'] == 'Makati City')
                                            {{ route('adminmakati') }}">
                                            @elseif ($metro['metro'] == 'Manila City')
                                                #">
                                                @elseif ($metro['metro'] == 'Mandaluyong City')
                                                    #">
                                                    @elseif ($metro['metro'] == 'Muntinlupa City')
                                                        #">
                                                        @elseif ($metro['metro'] == 'Parañaque City')
                                                            #">
                                                            @elseif ($metro['metro'] == 'Pasig City')
                                                                #">
                                                                @elseif ($metro['metro'] == 'Quezon City')
                                                                    #">
                                                                    @elseif ($metro['metro'] == 'Taguig City')
                                                                        #">
                                        @else
                                        #"
                                        @endif
                                        
                                        <span>{{ $metro['metro'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>Luzon</h4>
                        <ul>
                            @foreach ($header as $luzon)
                                <li>
                                    <a href="
                                        @if ($luzon['luzon'] == 'Laguna')
                                            #">
                                            @elseif ($luzon['luzon'] == 'Evo City')
                                                #">
                                                @elseif ($luzon['luzon'] == 'Batangas')
                                                    {{ route('batangas') }}">
                                                    @elseif ($luzon['luzon'] == 'Pampanga')
                                                        #">
                                        @else
                                        #"
                                        @endif
                                        
                                        <span>{{ $luzon['luzon'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>Visayas</h4>
                        <ul>
                            @foreach ($header as $visayas)
                                <li>
                                    <a href="
                                        @if ($visayas['visayas'] == 'Bacolod')
                                            #">
                                            @elseif ($visayas['visayas'] == 'Cebu')
                                                #">
                                        @else
                                        #"
                                        @endif
                                        
                                        <span>{{ $visayas['visayas'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="c-mega-menu__group-link">
                        <h4>Mindanao</h4>
                        <ul>
                            @foreach ($header as $mindanao)
                                <li>
                                    <a href="
                                        @if ($mindanao['mindanao'] == 'Cagayan De Oro')
                                            #">
                                        @else
                                        #"
                                        @endif
                                        
                                        <span>{{ $mindanao['mindanao'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</header>



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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- LOGOUT --}}
<script>
    $(document).ready(function() {
        $("#logout-link").click(function(e) {
            e.preventDefault();

            var form = $('<form>', {
                'action': '{{ route('logout') }}',
                'method': 'post',
                'style': 'display: none;'
            });

            form.append($('<input>', {
                'type': 'hidden',
                'name': '_token',
                'value': '{{ csrf_token() }}'
            }));

            form.append($('<button>', {
                'type': 'submit',
                'class': 'logout-button'
            }).text('LOGOUT'));

            form.appendTo('body').submit();
        });
    });
</script>