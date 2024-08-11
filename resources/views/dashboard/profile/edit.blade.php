@extends('dashboard.layouts.master')

@section('title', 'Edit Profile')

@section('content')

    <div class="main-content">
        <x-alert type="success"/>
        <section class="section">
            <div class="section-header">
                <h4>Edit Profile</h4>
            </div>
        </section>
        <form action="{{ route('dashboard.profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="form-row my-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.input name="first_name" label="First Name" :value="$user->profile->first_name"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.input name="last_name" label="Last Name" :value="$user->profile->last_name"/>
                    </div>
                </div>
            </div>

            <div class="form-row my-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.input name="birthday" label="Birthday" :value="$user->profile->birthday"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <x-form.radio name="gender" label="Gender" :options="['male' => 'Male', 'female' => 'Female']"
                                      :checked="$user->profile->gender"/>
                    </div>
                </div>
            </div>

            <div class="form-row my-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.input name="street_address" label="Street Address"
                                      :value="$user->profile->street_address"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.input name="city" label="City" :value="$user->profile->city"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.input name="state" label="State" :value="$user->profile->state"/>
                    </div>
                </div>
            </div>

            <div class="form-row my-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.input name="postal_code" label="Postal Code" :value="$user->profile->postal_code"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.select name="country" class="form-control" :options="$countries" label="Country"
                                       :selected="$user->profile->country"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <x-form.select name="local" class="form-control" :options="$locales" label="Local"
                                       :selected="$user->profile->local"/>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
        </form>
    </div>

@endsection
