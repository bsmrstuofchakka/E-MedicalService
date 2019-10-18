@include('layout.beforeSearchMaster')
@include('layout.profileMaster')

<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('searchNT'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}
            {{csrf_field()}}
            <input type="search" class="form-control" id="search_input" name="search"    placeholder="Search Here">

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
					Upload Notification/Task
				</span>

                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('nt/Add')}}">Add Upload NT</a>
                </div>
                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <td>Deposite Type</td>
                        <td>Description</td>
                        <td>Document Number</td>

                        <td>Upload Files</td>
                        <td>ACTION</td>
                    </tr>




                            <tr>
                                <td>{{$ntList->id}}</td>
                                <td>{{$ntList->date}}</td>
                                <td>{{$ntList->deposite}}</td>
                                <td>{{$ntList->description}}</td>
                                <td>{{$ntList->document}}</td>



                                {{--<td> {{\Illuminate\Support\Facades\Storage::path($ntL->upload)}} </td>--}}
                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($ntList->upload))}}">File</a></td>

                                <td>
                                    <a href="{{url('nt/Edit').'?id='.$ntList->id}}">Edit</a>/
                                    <a href="{{url('nt/Delete').'?id='.$ntList->id}}">Delete</a>
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
