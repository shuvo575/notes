@extends('layouts.master')

@section('nav')
@include('partials.nav')
@endsection


@section('content')
<!-- Get Started -->
<section id="pro" class="main special">
    <header class="major">
        <h2>New Note</h2>
    </header>
    <footer class="major text-center">
        <form method="post" action="#">
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Title" />
                </div>
                <div class="col-12">
                    <select name="demo-category" id="demo-category">
                        <option value="">- Category -</option>
                        <option value="1">Manufacturing</option>
                        <option value="1">Shipping</option>
                        <option value="1">Administration</option>
                        <option value="1">Human Resources</option>
                    </select>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                    <label for="demo-priority-low">Low</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-normal" name="demo-priority">
                    <label for="demo-priority-normal">Normal</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-high" name="demo-priority">
                    <label for="demo-priority-high">High</label>
                </div>
                <div class="col-12">
                    <textarea name="content" id="summernote"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Save Note" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </footer>
</section>
@endsection

@section('footer')
@include('partials.footer')
@endsection

@section('scripts')
@include('partials.scripts')
<script>
 $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
</script>
@endsection
