@extends('admin.main-layout')
@section('content') 
<div class="main-content" style="min-height: 512px;">
      <section class="section">
         <div class="section-body">
            <div class="row">
               <div class="col-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <h4>Menu Dessert Table</h4>
                    <a href="{{route('menu-desert-form')}}"> <button class="btn btn-outline-primary mr-5" > Add Dessert + </button></a> 

                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-md">
                              <tbody>
                                 <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Price</th> 
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                 </tr>
                                  @foreach($data as $key => $record) <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$record->menu_title}}</td>
                                    <td>{{$record->menu_price}}</td>
                                    <td>{{$record->menu_description}}</td>
                                    <td> <img src="{{ asset('Desert/' . $record->menu_image) }}" style="height: 70px; width: 100px; border-radius: 50%;" alt="Circular Image"> <!-- {{$record->s_image}} --> </td>
                                    <td class="d-flex justify-content-start"> <a href="{{route('edit-data' , $record->id)}}" class="btn btn-primary mr-2">Edit</a>
                                       <form action="{{route('delete-data', $record->id)}}" method="post"> 
                                           @csrf 
                                           <button type="submit" class="btn btn-danger"> Delete</button> </form>
                                    </td>
                                 </tr> @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="card-footer text-right">
                        <nav class="d-inline-block">
                           <ul class="pagination mb-0">
                              <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a> </li>
                              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                              <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div> @endsection