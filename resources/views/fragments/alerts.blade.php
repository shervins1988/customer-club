@if (session('message'))
    <div class="col-sm-6 col-md-4 col-lg-2">
                <button type="button" class="btn btn-raised m-b-10 btn-success btn-block waves-effect" data-placement-from="top" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="bg-black">{{session('message')}}</button>
            <br>
    </div>
@endif
@if ($errors->any())
    <div class="col-sm-6 col-md-4 col-lg-2">
        @foreach ($errors->all() as $error)
            <div class="btn btn-raised m-b-10 btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="alert-danger">
                {{$error}}
            </div>

            <br>
        @endforeach
    </div>
@endif
