@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Hello : <span style="color:red;font-weight: bold">{{ Auth::user()->name }}</span></div>

                <div class="panel-body">
                <div class="rows">
                    <div class="col-md-6">
                        <p>Address :<i><u>{{ Auth::user()->name }}</u></i></p>
                        <p>Email :<i><u>{{ Auth::user()->email }}</u></i></p>
                        <p>Join day :<i><u>{{ Auth::user()->created_at }}</u></i></p>
                        <p>level :
                        <i><u>
                        <?php if(Auth::user()->role == 0)
                        {
                            echo "Member";
                        }
                        else
                        {
                            echo "Admin";
                        }

                        ?>                           
                         </u></i></p>                       
                    </div>
                    <div class="col-md-6">Avartar</div>
                </div>
           </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: pink">New Post :  <a href="list">Back</a></div>
               
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" style="width: 50%" id="display">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="new" method="POST" role="form">  
                      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                                
                        <div class="form-group">
                            <label for="">Title</label>
                            <input style="width: 40%" name="title" type="text" class="form-control" id="" placeholder="Input field">
                            <br>
                         
                            <label>Category</label>
                            <select name="category" class="form-control" style="width: 40%">
                             <?php 
                                foreach ($category as $key => $value)
                                {
                                    echo "<option value ='$value[id]'> $value[name]</option>";
                                    
                                }

                              ?>
                           </select>
                            <label for="">Summary</label>
                            <textarea style="width: 40%;background: white" name="summary" rows="7" class="form-control"></textarea>

                            <label for="">Content</label>
                            <textarea name="content" rows="7" class="form-control"></textarea>
                        </div>                
                        <div class="text-center">
                        <button type="submit" class="btn btn-danger">Submit</button>
                        </div>                
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

  
 
</div>
@endsection
