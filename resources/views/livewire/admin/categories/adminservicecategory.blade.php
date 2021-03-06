<div>
    <style>
        nav svg{
            height: 20px;
        }
        svg{
            
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Add Services Category
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service_categories')}}" class="btn btn-info pull-right">Add Service Category </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        {{Session::get('message')}}
                                    </div>
                                @endif
                                <table class="table table-stripd">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($scategories as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td><img src="{{asset('images/categories')}}/{{$item->image}}" alt="{{$item->name}}"></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>
                                                <a href="{{route('admin.service_by_category',[ 'category_slug' => $item->slug])}}"  style="margin-right: 10px;"><i class="fa fa-list fa-2x text-info"></i></a>
                                                <a href="{{route('admin.edit_service_categories',[ 'category_id' => $item->id])}}"  ><i class="fa fa-edit fa-2x text-info"></i></a>
                                                <a href="#" onclick="confirm('Are You Sure, You Want To Delete Service category !') || event.stopImmediatePropagation()" wire:click.prevent='deleteservicecategory({{$item->id}})' style="margin-left: 10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        {{$scategories->links()}}
                        </div>
                    </div>
                </div>        
            </div>           
        </div>
    </section>
</div>

