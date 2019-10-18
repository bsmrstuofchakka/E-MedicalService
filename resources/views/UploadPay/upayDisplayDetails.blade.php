@include('layout.beforeSearchMaster')
@include('layout.profileMaster')

<div class="search_input"  id="search_input_box">
    <div class="container">
        <form class="d-flex justify-content-between" action="{{url('search')}}" method="GET" role="search">
            {{csrf_field()}}
            <input type="search" class="form-control" id="search_input" name="search"  value="@if(!empty($searching[0])) {{$searching[0]->date}} @endif"  placeholder="Search Here">

            <button type="submit" class="btn"></button>

        </form>
    </div>
</div>

@include('layout.afterSearchMaster')




<section class="features_area section_gap">
        <div class="container">



            <div >
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Upload pay
				</span>

                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('upay/Add')}}">Add Upload Pay</a>
                </div>
                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <td>Deposite Type</td>
                        <td>Description</td>
                        <td>Document Number</td>
                        <td>Amount</td>
                        <td>Upload Files</td>
                        <td>ACTION</td>
                    </tr>



                            <tr>
                                <td>{{$upayList->id}}</td>
                                <td>{{$upayList->date}}</td>
                                <td>{{$upayList->deposite}}</td>
                                <td>{{$upayList->description}}</td>
                                <td>{{$upayList->document}}</td>
                                <td>{{$upayList->amount}}</td>


                                {{--<td> {{\Illuminate\Support\Facades\Storage::path($upayL->upload)}} </td>--}}
                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($upayList->upload))}}">PDF</a></td>

                                <td>
                                    <a href="{{url('upay/Edit').'?id='.$upayList->id}}">Edit</a>/
                                    <a href="{{url('upay/Delete').'?id='.$upayList->id}}">Delete</a>
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