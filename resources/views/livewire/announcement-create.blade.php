<div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-2">

                @auth
                    
                <form class="glass text-white text-center p-5" wire:submit.prevent="store">

                    <h2 class="display-3 mb-5">{{__('ui.createAnnouncement')}}</h2>

                    @csrf

                    

                    @if (session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">{{__('ui.createTitle')}}</label>
                        <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" id="title"> @error('title'){{$message}} @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">{{__('ui.createDescription')}}</label>
                        <textarea type="text" wire:model="body" class="form-control @error('body') is-invalid @enderror" id="body"></textarea> @error('body'){{$message}} @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">{{__('ui.createPrice')}}</label>
                        <input type="number" step="0.01" wire:model="price" class="form-control w-25 d-inline @error('price') is-invalid @enderror" id="price"> @error('price'){{$message}} @enderror <span>€</span>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">{{__('ui.indexCategory')}}</label>
                        <select class="form-select" wire:model.defer="category" id="category">
                            <option value="" selected>{{__('ui.createCategory')}}</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                    </div>
                        <button type="submit" class="btn btnCategory">{{__('ui.createButton')}}</button>

                </form>
                @endauth

            </div>
        </div>
    </div>








</div>
