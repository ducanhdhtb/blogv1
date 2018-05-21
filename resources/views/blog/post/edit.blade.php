@extends('../layouts.app')

@section('content')
<div class="container">
		  <div class="col-md-8 col-md-push-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: pink">Edit post :  <a href="../list">Back</a></div>
               
                <div class="panel-body">
                    @if (session('flash5'))
                        <div class="alert alert-success" style="width: 50%" id="display">
                            {{ session('flash5') }}
                        </div>
                    @endif
                    <form action="<?php echo $select_post['id'] ?>" method="POST" role="form">  
                      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                                
                        <div class="form-group">
                            <label for="">Title</label>
                            <input style="width: 40%" name="title" type="text" class="form-control" id="" placeholder="<?php echo $select_post['title'] ?>">
                            <br>
                         
                            <label>Category</label>
                            <select name="category_id" class="form-control" style="width: 40%">
                            <option value="<?php echo $select_post['category_id'] ?>"><?php echo $select_post->getCategory->name ?></option>
                           </select>
                            <label for="">Summary</label>
                            <textarea style="width: 40%;background: white" name="summary" rows="7" class="form-control" placeholder="<?php echo $select_post['summary']?>"></textarea>

                            <label for="">Content</label>
                            <textarea name="content" rows="7" class="form-control" placeholder="<?php echo $select_post['content']?>"></textarea>
                        </div>                
                        <div class="text-center">
                        <button type="submit" class="btn btn-danger">Submit</button>
                        </div>                
                        
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection