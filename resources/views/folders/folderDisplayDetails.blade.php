@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('folder/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


        <input type="search" class="form-control" id="search_input" name="search"   placeholder="Search Here">

        <button type="submit" class="btn"></button>


        {!! Form::close() !!}
    </div>
</div>
@include('layout.afterSearchMaster')


<section class="features_area section_gap">
        <div class="container">



            <div >
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Folder
				</span>

                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('folder/Add')}}">Add Folder</a>
                </div>
                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Upload Files</td>
                        <td>ACTION</td>
                    </tr>



                            <tr>
                                <td>{{$folderList->id}}</td>
                                <td>{{$folderList->date}}</td>
                                <td>{{$folderList->title}}</td>
                                <td>{{$folderList->description}}</td>


                                {{--<td> {{\Illuminate\Support\Facades\Storage::path($upayL->upload)}} </td>--}}
                           {{--    <td> {{asset(\Illuminate\Support\Facades\Storage::url('app/'.$folderL->upload))}} </td> --}}
                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($folderList->upload))}}">File</a></td>
                                <td>
                                    <a href="{{url('folder/Edit').'?id='.$folderList->id}}">Edit</a>/
                                    <a href="{{url('folder/Delete').'?id='.$folderList->id}}">Delete</a>
                                </td>
                            </tr>

                </table>

            </div>


        </div>


        </div>
    </section>

    <section class="about_area lite_bg">
        <div class="container">
            <div class="row align-items-center">

            </div>
            <div class="about_bg overlay"></div>
        </div>
    </section>

    </div>

    @include('layout.afterMain')