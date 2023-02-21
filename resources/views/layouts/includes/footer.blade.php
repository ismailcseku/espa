<section class="clients ">

    <div class="container pt-40 pb-40 ">
        <h3 class="text-white font-38 font-weight-700 mt-10 mb-0"><span class="text-theme-colored2">Partenaires</span>
        </h3>
        <div class="row">
            <div class="col-md-12">
                <!-- Section: Clients -->

                <div class="owl-carousel-6col clients-logo transparent text-center">
                    @if (count($partners) > 0)
                        @foreach ($partners as $partner)
                            <div class="item"> <a href="#"><img src="{{ url('storage') }}/{{ $partner->photo }}"
                                        alt=""></a></div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer" data-bg-color="#20232E">
    <div class="container pt-60 pb-20">
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <img alt="" src="{{ asset('images/logo_footer.png') }}">
                <p class="mt-20">

                    <span>

                        Complexe Horticole d’Agadir, km 2 route d’Azrou,
                        B.P. 121 Ait Melloul 80150 - Agadir
                    </span>
                </p>
                <ul class="list-inline">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone mr-5"></i> <a href="#">(+212) 0528-241-006
                            / 240-155</a>
                    </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o mr-5"></i> <a
                            href="mail:contact@cha-agadir.ma">contact@cha-agadir.ma</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe mr-5"></i> <a
                            href="https://cha-agadir.ma">www.cha-agadir.ma</a> </li>
                </ul>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored2">Liens rapides</h4>
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <ul class="footer-link">
                            <li><a href="{{ route('home') }}">Acceuil</a></li>
                            <li><a href="{{ route('course.index') }}">Formations</a></li>
                            <li><a href="{{ route('evenement.index') }}">Évènements</a></li>
                            <li><a href="{{ route('blog.index') }}">Actualiés</a></li>
                            <li><a href="{{ route('media.index') }}">Médiathèques</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored2">Ouvert</h4>
                <div class="opening-hours">
                    <ul class="list-border">
                        <li class="clearfix"> <span> Lun - vendredi : </span>
                            <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                        </li>

                        <li class="clearfix"> <span> Sam : </span>
                            <div class="value pull-right bg-theme-colored2 text-white closed">Fermé</div>
                        </li>
                        <li class="clearfix"> <span> Dim : </span>
                            <div class="value pull-right bg-theme-colored2 text-white closed">Fermé</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" data-bg-color="#1B1D26">
        <div class="container pt-20 pb-20">
            <div class="row">

                <div class="col-md-6">
                    <p class="font-14 sm-text-center m-0">Copyright &copy;2023 <span class="text-theme-colored2">CHA
                            Agadir</span>. Tous droits réservés </p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-14">
                            <li>
                                <a href="#">Mentions légales</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Nous joindre</a>
                            </li>
                            <li>|</li>
                            <li class="text-white" style="position:relative; top:3px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4.05 21q-.45 0-.75-.3t-.3-.75V15.9q0-.35.225-.613q.225-.262.575-.337l3.45-.7q.35-.05.713.062q.362.113.587.338L10.9 17q1.9-1.15 3.488-2.725q1.587-1.575 2.637-3.375L14.6 8.45q-.225-.225-.288-.513q-.062-.287-.012-.637l.65-3.5q.05-.35.325-.575Q15.55 3 15.9 3h4.05q.45 0 .75.3t.3.75q0 3.225-1.438 6.287q-1.437 3.063-3.8 5.425q-2.362 2.363-5.424 3.8Q7.275 21 4.05 21ZM17.975 9q.425-.975.65-1.975q.225-1 .35-2.025H16.75l-.425 2.35Zm-8.95 8.95L7.35 16.275L5 16.75v2.2q1.025-.075 2.038-.325q1.012-.25 1.987-.675ZM17.975 9Zm-8.95 8.95Z" />
                                </svg>
                            </li>
                            <li>
                                <a href="#">(+212) 0528-241-006 / 240-155</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="{{ asset('app-assets/js/chart.js') }}" defer></script>
<!-- JS | Custom script for all pages -->
<script src="{{ asset('app-assets/js/custom.js') }}" defer></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}" defer>
</script>

</body>

</html>
