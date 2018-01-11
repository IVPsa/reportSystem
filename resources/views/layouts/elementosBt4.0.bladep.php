@extends('layouts.app')

@section('content')

<!--grilla para formularios-->
      <div class="col-md-12">
        <div class="row">

            <div class="col-md-6 col-xs-12">

              <div class="form-group row">
                <h5 class="col-md-2 col-xs-12 ">NOMBRE:</h5>
                <input class="form-control col-10 col-form  col-xs-12"  type="text" >
              </div>

              <div class="form-group row">
                <h5 class="col-md-2 col-xs-12">NOMBRE:</h5>
                <input class="form-control col-10 col-form  col-xs-12"  type="text" >
              </div>

            </div>
        </div>
      </div>
  <!--grilla para formularios-->
<div class="row">

  <div class="col-md-12">
    <!--letras-->
    <h1>HOLA</h1>
    <h2>HOLA</h2>
    <h3>HOLA</h3>
    <h4>HOLA</h4>
    <h5>HOLA</h5>
    <h6>HOLA</h6>

    <h1>Example heading <span class="badge badge-secondary">New</span></h1>
    <h2>Example heading <span class="badge badge-secondary">New</span></h2>
    <h3>Example heading <span class="badge badge-secondary">New</span></h3>
    <h4>Example heading <span class="badge badge-secondary">New</span></h4>
    <h5>Example heading <span class="badge badge-secondary">New</span></h5>
    <h6>Example heading <span class="badge badge-secondary">New</span></h6>

    <h1 class="display-1">Display 1</h1>
    <h1 class="display-2">Display 2</h1>
    <h1 class="display-3">Display 3</h1>
    <h1 class="display-4">Display 4</h1>

    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
    <p><u>This line of text will render as underlined</u></p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>

    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
    <ul class="list-unstyled">
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
    <ul class="list-inline">
      <li class="list-inline-item">Lorem ipsum</li>
      <li class="list-inline-item">Phasellus iaculis</li>
      <li class="list-inline-item">Nulla volutpat</li>
    </ul>
    <!--//letras-->

    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-link">Link</button>
    <br />
    <br />
    <a class="btn btn-primary" href="#" role="button">Link</a>
    <button class="btn btn-primary" type="submit">Button</button>
    <input class="btn btn-primary" type="button" value="Input">
    <input class="btn btn-primary" type="submit" value="Submit">
    <input class="btn btn-primary" type="reset" value="Reset">
    <br />
    <br />
    <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-light">Light</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    <br />
    <br />
    <button type="button" class="btn btn-primary btn-lg">Large button</button>
    <button type="button" class="btn btn-secondary btn-lg">Large button</button>

    <button type="button" class="btn btn-primary btn-sm">Small button</button>
    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
    <br />
    <br />
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
    <br />
    <br />
    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
    <br />
    <br />

    <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
    <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>

    <br />
    <br />

    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
      Single toggle
    </button>

    <br />
    <br />

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-secondary active">
        <input type="checkbox" checked autocomplete="off"> Active
      </label>
      <label class="btn btn-secondary">
        <input type="checkbox" autocomplete="off"> Check
      </label>
      <label class="btn btn-secondary">
        <input type="checkbox" autocomplete="off"> Check
      </label>
    </div>

    <br />
    <br />

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option2" autocomplete="off"> Radio
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option3" autocomplete="off"> Radio
      </label>
    </div>
    <br />
    <br />
    <br />
    <br />

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <br />
    <br />

    <div class="card">
      <div class="card-body">
        This is some text within a card body.
      </div>
    </div>
    <br />
    <br />

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <br />
    <br />


    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <br />
    <br />
        <!--alert-->
        <div class="alert alert-primary" role="alert">
          This is a primary alert—check it out!
        </div>
        <div class="alert alert-secondary" role="alert">
          This is a secondary alert—check it out!
        </div>
        <div class="alert alert-success" role="alert">
          This is a success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
          This is a danger alert—check it out!
        </div>
        <div class="alert alert-warning" role="alert">
          This is a warning alert—check it out!
        </div>
        <div class="alert alert-info" role="alert">
          This is a info alert—check it out!
        </div>
        <div class="alert alert-light" role="alert">
          This is a light alert—check it out!
        </div>
        <div class="alert alert-dark" role="alert">
          This is a dark alert—check it out!
        </div>
        <!--//alert-->
    </div>

@endsection
