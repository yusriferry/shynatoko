@extends('layouts.default')

@section('content')
    
    <div class="card">
        <div class="card-header">
           <strong>Ubah Barang</strong> 
           <small>{{ $item->name }}</small>
        </div>
        <div class="card-body card-block">
           <form action="{{ route('products.update', $item->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-grup">
               <label for="id_product" class="form-control-label">Code Barang</label> 
               <input   type="text"
                        name="id_product"
                        value="{{ old('id_product') ? old('id_product') : $item->id_product}}"
                        class="form-control @error('id_product') is-invalid @enderror"/>
                @error('id_product') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-grup">
               <label for="name" class="form-control-label">Nama Barang</label> 
               <input   type="text"
                        name="name"
                        value="{{ old('name') ? old('name') : $item->name}}"
                        class="form-control @error('name') is-invalid @enderror"/>
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-grup">
            <label for="size" class="form-control-label">Ukuran Sepatu</label> 
                <select type="select"
                        name="size" 
                        value="{{ old('size') }} ? old('size') : $item->size}}"  
                        class="form-control @error('size') is-invalid @enderror">
                        <option>34</option>
                        <option>35</option>>
                        <option>36</option>>
                        <option>37</option>>
                        <option>38</option>>
                        <option>39</option>>
                        <option>40</option>>
                        <option>41</option>>
                        <option>42</option>>
                        <option>43</option>>
                        <option>44</option>>
                        <option>45</option>>
                        <option>46</option>>
                        <option>47</option>>
                @error('size') <div class="text-muted">{{ $message }}</div> @enderror
            </select>
            <div class="form-grup">
               <label for="size" class="form-control-label">Ukuran Sepatu</label> 
               <input   type="text"
                        name="size"
                        value="{{ old('size')  ? old('size') : $item->size}}"
                        class="form-control @error('size') is-invalid @enderror"/>
                @error('size') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-grup">
            <label for="type" class="form-control-label">Tipe Barang</label> 
                <select type="select"
                        name="type" 
                        value="{{ old('type') }} ? old('type') : $item->type}}"  
                        class="form-control @error('type') is-invalid @enderror">
                        <option>Authentic</option>
                        <option>Old Skool</option>
                        <option>Classic</option>
                        <option>Slip On</option>
                        <option>Canvas</option>
                        <option>Sk8Low</option>
                @error('type') <div class="text-muted">{{ $message }}</div> @enderror
            </select>
            <div class="form-grup">
               <label for="description" class="form-control-label">Deskripsi Barang</label> 
               <textarea name="description" 
                class="ckeditor form-control @error('description') is-invalid @enderror">{{old('description') 
                    ? old('description') : $item->description}}</textarea>
                @error('description') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-grup">
               <label for="price" class="form-control-label">Harga Barang</label> 
               <input   type="number"
                        name="price"
                        value="{{ old('price') ? old('price') : $item->price }}"
                        class="form-control @error('price') is-invalid @enderror"/>
                @error('price') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-grup">
               <label for="quantity" class="form-control-label">Kuantitas Barang</label> 
               <input   type="number"
                        name="quantity"
                        value="{{ old('quantity') ? old('quantity') : $item->quantity}}"
                        class="form-control @error('quantity') is-invalid @enderror"/>
                @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <br>
            <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                Ubah Barang
            </button>
            </div>
           </form> 
        </div>
    </div>

@endsection