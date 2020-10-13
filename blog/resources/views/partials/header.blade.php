<!-- header -->
<header>
    <div class="container-fluid">
        <div class="header d-md-flex justify-content-between align-items-center py-3 pl-2">
            <!-- logo -->
            <div id="logo">
                <h1><a href="/">Food Blog</a></h1>
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="/" class="nav-style">Home</a></li>
                       
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2 nav-style">Category <span
                                    class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#" class="active nav-style">Category <span class="fa fa-angle-down"
                                    aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                {{-- @foreach($articles as $article)
                            <li><a href="blog1.html" class="drop-text">{{ $article->category->name }}</a></li>
                                
                                @endforeach --}}

                                @foreach(App\Models\category::all() as $category)
                            <li><a href="/category/{{$category->id}}" class="drop-text">{{ $category->name }}</a></li>
                                
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/contact" class="nav-style">contact</a></li>
                        
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner_w3lspvt-2">
    <div class="container">
        <div class="d-flex style-w3layouts">
            
            
        </div>
    </div>
</div>
<!-- //banner -->