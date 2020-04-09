{!!Form::open(['url' => '/products', 'class' => 'app-form']) !!}
<div>
  {!! Form::label('title',"Product's title") !!}
  {!! Form::text('title','',['class' => 'form-control']) !!}
</div>

<div>
  {!! Form::label('description',"Product's details") !!}
  {!! Form::textarea('description','',['class' => 'form-control']) !!}
</div>


<div>
  {!! Form::label('price',"Product's price") !!}
  {!! Form::number('price',"",['class' => 'form-control']) !!}
</div>

<div class="">
  <input type="submit" name="save" value="Save" class="btn btn-primary">
</div>


{!!Form::close() !!}
