@extends('master')
@section('title','Show Data')
@section('content')
<div class="flex flex-col mt-2">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">Name</th>
              <th scope="col" class="px-6 py-4">Address</th>
              <th scope="col" class="px-6 py-4">Email</th>
              <th scope="col" class="px-6 py-4">Postal Code</th>
              <th scope="col" class="px-6 py-4">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Default
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-primary-200 bg-primary-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Primary
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-secondary-200 bg-secondary-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Secondary
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-success-200 bg-success-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Success
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-danger-200 bg-danger-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Danger
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-warning-200 bg-warning-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Warning
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-info-200 bg-info-100 text-neutral-800">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Info
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-neutral-100 bg-neutral-50 text-neutral-800 dark:bg-neutral-50">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Light
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr
              class="border-b border-neutral-700 bg-neutral-800 text-neutral-50 dark:border-neutral-600 dark:bg-neutral-700">
              <td class="whitespace-nowrap px-6 py-4 font-medium">
                Dark
              </td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop