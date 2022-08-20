<!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <form action="{{url('/search')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" style="color:black;" name="name" placeholder="Search keyword">
                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <select class="wide">
                        <option data-display="Location">Location</option>
                        <option value="1">Dhaka</option>
                        <option value="2">Rangpur</option>
                        <option value="4">Sylhet</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <select class="wide">
                        <option data-display="Category">Category</option>
                        <option value="1">Marketing</option>
                        <option value="2">Software</option>
                        <option value="4">Graphics Designer</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">
                    <span>Popular Search:</span>
                    <ul>
                        <li><a href="#">Design & Creative</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Administration</a></li>
                        <li><a href="#">Teaching & Education</a></li>
                        <li><a href="#">Engineering</a></li>
                        <li><a href="#">Software & Web</a></li>
                        <li><a href="#">Telemarketing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ catagory_area -->