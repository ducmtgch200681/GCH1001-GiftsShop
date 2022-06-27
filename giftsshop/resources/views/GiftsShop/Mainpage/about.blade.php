@extends('masters.giftsshopMaster')

@section('main')
    <style>
        img {
            margin-left: 25%;
            width: 50%;
        }
        /*}*/
        handmade{
            float: left;
        }
        sweet{
            float: left;
        }
    </style>

    <div class="container">
        <div class="products">
            <div>
                <h3><strong>Our Products</strong></h3>
                <div class="handmade">
                <h5><strong>Handmade</strong></h5>
                <h5>
                    Handmade items in our store are made by the hands of skilled craftsmen with the best quality in order to bring customers the best experience for the goods purchased in the store.
                    We also cooperate with companies specializing in the production of handmade items such as henmet, DOLAMTAY, TAYLAMDO, .. to create the best quality products to meet today's consumer needs.
                </h5>
                </div>
                <div>
                    <img src="https://macramela.com/wp-content/uploads/2020/07/l%C3%A0m-%C4%91%E1%BB%93-handmade.jpg">
                </div>
                <div class="sweet">
                <h5><strong>Sweet</strong></h5>
                <h5>
                    All sweets are produced by The Giftshop with the desire to create the best quality products and reasonable prices.
                </h5>
                </div>
                <div>
                    <img src="http://www.cuahangbeyeu.vn/img/p_832_0_eghrjmuji.jpg">
                </div>
                <h5><strong>Luxury</strong></h5>
                <h5>
                    All luxury items are imported directly from countries such as the US, UK, Italy, France... with the desire to bring expensive products to customers with the reputation of 100% being genuine.
                </h5>
                <div>
                    <img src="https://cf.shopee.vn/file/380871726ea9bafa0cd312054853988f">
                </div>
            </div>
            <div>
                <h3><strong>Why we created this website and website overview</strong></h3>
                <h5>In the 4.0 technology era, the demand for online shopping is high and online shopping will help people save
                    a lot of time compared to going to the store. So our team decided to build a website where people would get
                    all the information about the different products available to them easily. Gifts Online is a project we created
                    to sell gifts so that buyers can buy directly on the website without having to go to the store. My team
                    advertises by distributing leaflets, television advertisements to attract people to our website selling gifts.
                    Frames and a good logo should be used to create the Home Page. Gift item descriptions and photographs
                    should be included on the home page. The site should have a menu with options for a quick introduction to
                    the many gift products available, the shop's location, and any other information needed.
                    Product information should be presented in one of two ways: Information should be available by category,
                    with the user being able to click on a certain category and see all of the products connected to that category
                    with complete information. For example, a category could be "mugs," "cards," "bracelets," and so on, with
                    appropriate sub-categories created. And product information should be organized by brand name. For
                    example, if a user wishes to see only "Hallmark" products or any other company's products, he or she can
                    click on a link/button/menu and see only those products.
                    If a user picks a brand, a list of products associated with that brand is provided. Different product qualities
                    should be summarized on the Website page alongside the product, but full features should be saved in
                    individual Word documents that may be downloaded or accessed by the User who desires to examine them.
                    The customer should also be able to compare products from other brands, both similar and dissimilar.
                </h5>
            </div>
        </div>
        <div>
            <h3><strong>Partners</strong></h3>
        <marquee id="marq" scrollamount="3" direction="right" loop="50" scrolldelay="0" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()">
            <a href="https://be.com.vn/"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple122/v4/93/e4/af/93e4af1a-fc08-266c-aad2-d35c297be444/AppIcon-0-0-1x_U007emarketing-0-0-0-8-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x600wa.png" title="be" width="100" height="200"/></a>
            <a href="https://fpt.com.vn/vi"><img src="https://i.chungta.vn/2017/12/22/LogoFPT-2017-copy-3042-1513928399.jpg" title="fpt" width="100" height="200"/></a>
            <a href="https://giaohangtietkiem.vn/"><img src="https://sanvieclamcantho.com/upload/imagelogo/cong-ty-co-phan-giao-hang-tiet-kiem1575178807.png" title="ghtk" width="100" height="200"/></a>
            <a href="https://www.grab.com/vn/"><img src="https://assets.grab.com/wp-content/uploads/sites/11/2021/04/15154334/Grab_Logo_2021.jpg" title="grab" width="100" height="200"/></a>
            <a href="https://greenwich.edu.vn/en/english/"><img src="http://static.ybox.vn/2020/2/4/1582769527314-1537594031380-Greenwich.jpg" title="greenwich" width="100" height="200"/></a>
        </marquee>
        </div>
    </div>
@endsection
