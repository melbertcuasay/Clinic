<section class="products" id="products">
        <div class="heading">
            <span> OUR PRODUCTS </span>
            <h1> See our Clinic Skin Products </h1>
        </div>
            <div class="box-container">
                 @foreach($products as $products)
                <div class="box">
                    <div class="image">
                        <img src="/assets/uploads/products/{{ $products->image }}">
                    </div>
                    <div class="content">
                        <h3> {{ $products->product_name }} </h3>
                        <h3> {{ $products->product_type }} </h3>
                        <p>{{ $products->description }}</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>
                @endforeach

               


            </div>
      </section>