@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">

        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')


                <div class="row">
                    <div class="col-xs-12">

                        <div id="return_msg"></div>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>@lang('app.account_status')</th>
                                <td>
                                    <label>
                                        <input type="radio" name="account_status" value="1" data-user-id="{{$user->id}}" @if($user->active_status == '1') checked="checked" @endif />
                                        @lang('app.active')
                                    </label>

                                    <label>
                                        <input type="radio" name="account_status" value="2" data-user-id="{{$user->id}}" @if($user->active_status == '2') checked="checked" @endif />
                                        @lang('app.block')
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <th>@lang('app.name')</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                              <tr>
                                <th>PessaCoins</th>
                                <td>{{ $user->crypto_wallet }}</td>
                            </tr>
                              <tr>
                                <th>Earning PessaCoins</th>
                                <td>{{ $user->earnings  }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.user_name')</th>
                                <td>{{ $user->user_name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.email')</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.gender')</th>
                                <td>{{ ucfirst($user->gender) }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.mobile')</th>
                                <td>{{ $user->mobile }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.phone')</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.address')</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.country')</th>
                                <td>
                                    @if($user->country)
                                        {{ $user->country->country_name }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('app.website')</th>
                                <td>{{ $user->website }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.created_at')</th>
                                <td>{{ $user->signed_up_datetime() }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.status')</th>
                                <td>{{ $user->status_context() }}</td>
                            </tr>
                        </table>

                    </div>
                </div>

                    @if($ads->total() > 0)
                        <div class="row">
                            <div class="col-xs-12">
                                <h3>@lang('app.posted_ads')</h3>

                                <table class="table table-bordered table-striped">

                                    @foreach($ads as $ad)
                                        <tr>
                                            <td width="100">
                                                <img src="{{ media_url($ad->feature_img) }}" class="img-responsive" alt="">
                                            </td>
                                            <td>
                                                <h5><a href="{{ route('single_ad', $ad->slug) }}" target="_blank">{{ $ad->title }}</a> </h5>
                                                <p class="text-muted">
                                                    <i class="fa fa-map-marker"></i> {!! $ad->full_address() !!}<br />  <i class="fa fa-clock-o"></i> {{ $ad->posting_datetime()  }}

                                                    @if($ad->reports->count() > 0)
                                                    <br />
                                                    <a href="{{ route('reports_by_ads', $ad->slug) }}">
                                                    <i class="fa fa-exclamation-triangle"></i> @lang('app.reports') : {{ $ad->reports->count() }}
                                                    </a>
                                                    @endif
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                                {!! $ads->links() !!}

                            </div>
                        </div>

                    @endif



            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')

    <script>

        $(function(){
            $(document).on('click','[name="account_status"]', function(){
                var user_id = $(this).data('user-id');
                var status = $(this).val();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('change_user_status') }}',
                    data: { user_id : user_id, status : status, _token : '{{csrf_token()}}' },
                    success : function(data){
                        $('#return_msg').html(data);
                    }
                });
            });
        })
    </script>



@endsection