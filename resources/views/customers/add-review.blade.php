<div class="modal fade p-5 overflow-auto " id="add{{$services->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">>
    <div class="modal-dialog" role="document">
        <div class="modal-content p-5">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@if(App::getlocale()=='ar')
                    {{$services->title_ar}}
                    @else
                    {{$services->title}}
                    @endif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('customer-services.store', [$services->id]) }}" method="post">
                {{ csrf_field() }}
                @csrf
                <div class="modal-body py-4">
                    <label for="exampleInputPassword1">{{trans('site.rate')}}</label>
                    <input type="text" name="rating" required class="form-control" pattern="^[1-5]">
                    <input type="hidden" name="service_id" class="form-control" value="{{$services->id}}">
                </div> 
                <div class="modal-footer d-flex justify-content-lg-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('site.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('site.add_review')}}</button>
                </div>
            </form>
        </div>
    </div>
</div> 