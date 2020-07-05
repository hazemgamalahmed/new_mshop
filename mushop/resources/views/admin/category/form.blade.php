<label>the parent of the category</label>
                    <select class="form-control" name="parent_id">
                    <option value = ""> not set</option>
                    @foreach($categories as $rowCategory)
                    @if(isset($category) && $category->parent && $rowCategory->id == $category->parent->id)
                    <option value="{{$rowCategory->id}}" selected>{{$rowCategory->name}}</option>
                    @else
                    <option value="{{$rowCategory->id}}">{{$rowCategory->name}}</option>
                    @endif
                    @endforeach
                    </select>
                    <span class="text-danger">
                    {{$errors->first('parent_id')}}
                    <br>
                    </span>
                    <label>the name of the category</label>
                    <input class="form-control" type="text" name = "name" value = "{{isset($category->name) ? $category->name : ''}}"/>
                    <span class="text-danger">
                    {{$errors->first('name')}}
                    <br>
                    </span>
                    <label>the level of the category</label>
                    <select class="form-control" name="level">
                 
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    <span class = "text-danger">
                    {{$errors->first('level')}}
                    <br>
                    </span>
                    <label>the description of the product</label>
                    <textarea name="description" class="form-control" cols="10" rows = 20>{{isset($category->description) ? $category->description : ''}}</textarea>
                    <span class = "text-danger">
                    {{$errors->first('description')}}
                    <br>
                    </span>
                    @if(isset($category))
                    <div class = "text-center">

                            <button type="submit" class="btn btn-primary form-control"><i class="fa fa-edit"></i> Edit Product</button>
                            </div>
                    @else
                    <div class = "text-center">

                    <button type="submit" class="btn btn-success form-control"> <i class="fa fa-plus"></i> Add Product</button>
                    </div>
                    @endif