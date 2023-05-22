<div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @auth
                    
                <h2 class="text-center">Inserisci il tuo annuncio</h2>
                <form class="shadow p-5 rounded bg-white" wire:submit.prevent="store">
                    @csrf

                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                    @if (session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo annuncio</label>
                        <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" id="title"> @error('title'){{$message}} @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione</label>
                        <textarea type="text" wire:model="body" class="form-control @error('body') is-invalid @enderror" id="body"></textarea> @error('body'){{$message}} @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" step="0.01" wire:model="price" class="form-control @error('price') is-invalid @enderror" id="price"> @error('price'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-select" wire:model.defer="category" id="category">
                            <option value="" selected>Seleziona una categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                    </div>
                        <button type="submit" class="btn btn-primary">Crea articolo</button>

                </form>
                @endauth

            </div>
        </div>
    </div>








</div>
