@extends('layouts.masterAdmin')

@section('title', 'Manage-Article')

@section('welcome')
<h1 class=" font-weight-bold mt-4" style="font-size: 100px;">WELCOME, <span class=" font-weight-light ">{{ Auth::user()->name }}</span><i class="far fa-smile-wink ml-3"></i> </h1>
<p>Here the admin can manage all data from a website <span class=" font-weight-bold">CookingKUY</span> (food recipes)</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti iusto nihil tempora qui, soluta, aliquam alias eum, sapiente dicta maxime corporis. Mollitia distinctio repellat quisquam sequi eveniet quam cumque provident? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid porro optio quibusdam, aperiam officia cum ipsam ipsum, totam id voluptate quae, minima quidem sit eveniet eaque aspernatur quisquam atque quam?</p>
@endsection