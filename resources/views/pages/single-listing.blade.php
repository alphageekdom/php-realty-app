@extends('layouts.main')

@section('page-title', 'All Properties - A|G Realty')
@section("content")
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=3000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Listed House"/>
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form action="" class="listing-top__form">
                    <label class="listing-top__form-label">Schedule A Tour</label>
                    <div class="listing-top__form-group listing-top__form-group--horizontal">
                        <div class="listing-top__form-option">In-Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>
                    <label class="listing-top__form-label">Date</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">10 / 12 / 2030</div>
                    </div>
                    <label class="listing-top__form-label">Time</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">11 AM PST</div>
                    </div>
                    <label class="listing-top__form-label">Personal Info</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Phone Number</div>
                    </div>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Email</div>
                    </div>
                    <div class="listing-top__form-group">
                        <button type="submit" class="listing-top__form-button">Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>23 Grand Ave <br>
                    Santa Ana, CA 99999
                    </h1>
                    <div class="listing-info__details">
                        <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i>4</span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i>3</span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i>2,400 SQFT</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <span class="listing-info__agent-title">Agent</span>
                    <span class="listing-info__agent-name">John Smith</span>
                    <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, explicabo aliquid ab quisquam, quaerat perferendis alias qui mollitia fugit unde ipsam? Dolores illo sapiente similique perferendis non quasi distinctio commodi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="listing-extras">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extras__details">
                        <h2>More Info</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magnam sed veritatis odit at. Impedit accusamus autem incidunt totam fugit, ipsa doloremque provident pariatur voluptas deleniti nostrum minima, nisi ex!</p>
                        <h3>Details</h3>
                        <ul>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="listing-extras__gallery">
                        <h2>Images</h2>
                        <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=3000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="House Gallery" width="auto" height="auto" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection