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
                        @if($ads->total() > 0)
                            <table class="table table-bordered table-striped table-responsive">

                                @foreach($ads as $ad)
                                    <tr>
                                        <td width="100">
                                            <img src="{{ media_url($ad->feature_img) }}" class="thumb-listing-table" alt="">
                                        </td>
                                        <td>
                                            <h5><a href="{{ route('single_ad', $ad->slug) }}" target="_blank">{{ $ad->title }}</a> ({!! $ad->status_context() !!})</h5>
                                            <p class="text-muted">
                                                <i class="fa fa-user"></i> {!! $ad->seller_name !!} <br />  <i class="fa fa-clock-o"></i> {{ $ad->posting_datetime()  }}
                                            </p>
                                        </td>

                                        <td>
                                            <a href="{{ route('edit_ad', $ad->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:;" class="btn btn-danger deleteAds" data-slug="{{ $ad->slug }}"><i class="fa fa-trash"></i> </a>

                                                <a href="#payment{{ $ad->id }}" class="btn btn-danger btn-xs" data-target="#payment{{ $ad->id }}" data-toggle="modal"> Make Payment</a>
                                        </td>
                                    </tr>


                                      <!--make payment modal-->
                    <div id="payment{{ $ad->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h5 class="modal-title">You want to make payments, 1 pessacoin will be deducted from your account</h5>
                        </div>

                        <div class="modal-body">
                            <!--start form-->

                                 @if($lUser->crypto_wallet>=1)

                      <form action="{{ route('song-amount') }}" method="post"> @csrf


              
                            <input type="hidden" name="user_id" value="{{ $lUser->id }}">
                            <input type="hidden" name="ad_id" value="{{ $ad->id }}">


                      <div class="row form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-sm btn-primary" name="del" value="update">Proceed</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" >Close</button>
                        </div>
                    </div>


                  </form>
                    <!--end form-->
                    @else
                    <p>You have insufficient pessacoin, deposit amount on your wallet</p>
                    <a href="{{route('buy')}}" class="btn btn-sm btn-primary"> Buy Pessacoin</a>
                    @endif
                </div>

            </div><!--modal content-->
        </div><!--modal dialog-->
    </div>
                                @endforeach

                            </table>
                        @endif

                        {!! $ads->links() !!}

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')

    <script>
        $(document).ready(function() {
            $('.deleteAds').on('click', function () {
                if (!confirm('{{ trans('app.are_you_sure') }}')) {
                    return '';
                }
                var selector = $(this);
                var slug = selector.data('slug');
                $.ajax({
                    url: '{{ route('delete_ads') }}',
                    type: "POST",
                    data: {slug: slug, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });
    </script>

    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
        @if(session('error'))
            toastr.error('{{ session('error') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
    </script>

@endsection