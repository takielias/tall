@extends('layouts.windmill.app')

@section('title')
    {{ __('Home') }}
@endsection

@section('content')
    <!-- General elements -->
    <h4
        class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
        Elements
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <x-forms.input
            name="name"
            label="Name"
            type="text"
            placeholder="Name"></x-forms.input>

        <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Account Type
                </span>
            <div class="mt-2">
                <x-forms.radio
                    name="name"
                    label="Personal"
                    value="1"></x-forms.radio>
                <x-forms.radio
                    name="name"
                    label="Business"
                    value="2"></x-forms.radio>
            </div>
        </div>

        <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Requested Limit
                </span>
            <select
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            >
                <option>$1,000</option>
                <option>$5,000</option>
                <option>$10,000</option>
                <option>$25,000</option>
            </select>
        </label>

        <x-forms.multi-select
            name="newselect"
            label="Multi Select Requested Limit"
            multiple="multiple"
        >
        </x-forms.multi-select>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Message</span>
            <textarea
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                rows="3"
                placeholder="Enter some long form content."
            ></textarea>
        </label>

        <div class="flex mt-6 text-sm">
            <label class="flex items-center dark:text-gray-400">
                <input
                    type="checkbox"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                />
                <span class="ml-2">
                    I agree to the
                    <span class="underline">privacy policy</span>
                  </span>
            </label>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@stop
