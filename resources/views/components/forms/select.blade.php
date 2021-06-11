<label class="block mt-4 text-sm">
    <x-forms.label :label="$label"/>
    {{Form::select($name, $arrayValue, $selected, ['placeholder' => $placeholder, 'class'=> 'block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray'])}}
</label>
