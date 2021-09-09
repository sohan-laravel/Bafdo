<div class="col-lg-3">

                        <div id="categories_nav">

                            <li class="nav-item dropdown show">
                                <a class="nav-link dropdown-toggle Feature_Categories" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-fluid" src="assets/img/icon/categories.png"> Feature Categories
                                </a>
                                <ul class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">

                                    @foreach ($category as $row)

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{ $row->name }}<i class="fas fa-angle-right "></i></a>
                                        @foreach ($row->Subcategories as $subcat)

                                        <ul class="dropdown-menu">
                                            {{ $subcat->subcategory_name }}
                                        </ul>

                                         @endforeach

                                        {{-- @foreach ($row->Subsubcategories as $subsubcat)

                                        <ul class="dropdown-menu">
                                            {{ $subsubcat->subsubcategory_name }}
                                        </ul>

                                         @endforeach --}}

                                    </li>

                                    @endforeach

                                </ul>
                            </li>

                        </div>

                    </div>