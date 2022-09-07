@include('Front.partials.main-head')
@include('Front.partials.topbar')
@include('Front.partials.header')
<section id="projects-list-section" class="projects-list-section" style="padding-top: 170px;">
    <div class="container">
        <div class="row justify-content-between">
            <aside class="col-md-3">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                {{ __('front_static.project_category') }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="filter-item">
                                    <div class="d-flex mb-3">
                                        <input type="radio" id="item1" name="categoryFilter">
                                        <label for="item1" class="choose single"></label>
                                        <span>item1 item1 item1</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="radio" id="item2" name="categoryFilter">
                                        <label for="item2" class="choose single"></label>
                                        <span>item2</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="radio" id="item3" name="categoryFilter">
                                        <label for="item3" class="choose single"></label>
                                        <span>item3</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="radio" id="item4" name="categoryFilter">
                                        <label for="item4" class="choose single"></label>
                                        <span>item4</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="radio" id="item5" name="categoryFilter">
                                        <label for="item5" class="choose single"></label>
                                        <span>item5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                {{ __('front_static.project_participants') }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="filter-item">
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="item11" name="participationFilter">
                                        <label for="item11" class="choose"></label>
                                        <span>item11</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="item22" name="participationFilter">
                                        <label for="item22" class="choose"></label>
                                        <span>item22</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="item33" name="participationFilter">
                                        <label for="item33" class="choose"></label>
                                        <span>item33</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="item44" name="participationFilter">
                                        <label for="item44" class="choose"></label>
                                        <span class="clearMarg">item44</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="filter-item">
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="onSale">
                                        <label for="onSale" class="choose"></label>
                                        <span>ON SALE</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="newest">
                                        <label for="newest" class="choose"></label>
                                        <span>NEWEST</span>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <input type="checkbox" id="featured">
                                        <label for="featured" class="choose"></label>
                                        <span>FEATURED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-md-9">
                <div class="row mb-5">
                    <div class="col-md-6 me-auto">
                        <form>
                            <div class="input-group mb-4 border second-border-radius p-1">
                                <button id="search" type="button" class="btn btn-link text-primary"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="search" placeholder="{{ __('front_static.search_here') }}"
                                    aria-describedby="search" class="form-control border-0">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select second-border-radius px-3" style="height: 48px !important;"
                            aria-label="sort-by">
                            <option selected>{{ __('front_static.sort_by') }}</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-6 mb-5">
                        @include('Front.components.project_card')
                    </div>
                    <div class="col-md-6 mb-5">
                        @include('Front.components.project_card')
                    </div>
                    <div class="col-md-6 mb-5">
                        @include('Front.components.project_card')
                    </div>
                    <div class="col-md-6 mb-5">
                        @include('Front.components.project_card')
                    </div>
                </div>
                @include('Front.components.pagination')
            </div>
        </div>
    </div>
    </div>
</section>
@include('Front.partials.footer')
@include('Front.partials.main-scripts')
