@extends('admin.layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">

		<!-- Component Start -->
		<h1 class="text-lg text-gray-400 font-medium">2020-21 Season</h1>
		<div class="flex flex-col mt-6">
			<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
					<div class="shadow overflow-hidden sm:rounded-lg">
						<table class="min-w-full text-sm text-gray-400">
							<thead class="bg-gray-800 text-xs uppercase font-medium">
								<tr>
									<th></th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										Club
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										MP
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										W
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										D
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										L
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										GF
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										GA
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										GD
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										Pts
									</th>
									<th scope="col" class="px-6 py-3 text-left tracking-wider">
										Last 5
									</th>	
								</tr>
							</thead>
							<tbody class="bg-gray-800">
								
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										1
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png" alt="">
										<span class="ml-2 font-medium">Man United</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										3
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										3
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										34
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										24
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										10
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										34
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										2
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/0iShHhASp5q1SL4JhtwJiw_48x48.png" alt="">
										<span class="ml-2 font-medium">Liverpool</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										9
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										6
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										37
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										16
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										33
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										3
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/UDYY4FSlty6fXFBzvFfcyw_48x48.png" alt="">
										<span class="ml-2 font-medium">Leicester City</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										10
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										31
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										10
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										32
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										4
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/C3J47ea36cMBc4XPbp9aaA_48x48.png" alt="">
										<span class="ml-2 font-medium">Everton</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										10
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										28
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										32
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										5
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/k3Q_mKE98Dnohrcea0JFgQ_48x48.png" alt="">
										<span class="ml-2 font-medium">Tottenham</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										16
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										18
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										3
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										15
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										14
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										6
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/z44l-a0W1v5FmgPnemV6Xw_48x48.png" alt="">
										<span class="ml-2 font-medium">Man. City</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										15
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										24
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										13
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										7
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/y1V4sm2SEBiWUPRIYl5rfg_48x48.png" alt="">
										<span class="ml-2 font-medium">Southampton</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										26
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										19
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										8
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/uyNNelfnFvCEnsLrUL-j2Q_48x48.png" alt="">
										<span class="ml-2 font-medium">Aston Villa</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										15
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										16
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										13
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										26
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										9
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/fhBITrIlbQxhVB6IjxUO6Q_48x48.png" alt="">
										<span class="ml-2 font-medium">Chelsea</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										32
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										26
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										10
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/bXkiyIzsbDip3x2FFcUU3A_48x48.png" alt="">
										<span class="ml-2 font-medium">Westham</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										24
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										3
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										26
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										11
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/4us2nCgl6kgZc0t3hpW75Q_48x48.png" alt="">
										<span class="ml-2 font-medium">Arsenal</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										20
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										19
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										1
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										23
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										12
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/5dqfOKpjjW6EwTAx_FysKQ_48x48.png" alt="">
										<span class="ml-2 font-medium">Leeds United</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										30
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										33
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-3
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										23
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										13
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/8piQOzndGmApKYTcvyN9vA_48x48.png" alt="">
										<span class="ml-2 font-medium">Crystal Palace</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										6
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										22
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										22
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										14
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/-WjHLbBIQO9xE2e2MW3OPQ_48x48.png" alt="">
										<span class="ml-2 font-medium">Wolves</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										18
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										6
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										19
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										26
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										22
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										15
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/96CcNNQ0AYDAbssP0V9LuQ_48x48.png" alt="">
										<span class="ml-2 font-medium">Newcastle</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										18
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										27
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-9
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										19
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										16
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/teLLSaMXim_8BA1d93sMng_48x48.png" alt="">
										<span class="ml-2 font-medium">Burnley</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										16
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										4
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										9
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-12
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										16
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										17
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/EKIe0e-ZIphOcfQAwsuEEQ_48x48.png" alt="">
										<span class="ml-2 font-medium">Brighton</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										21
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										28
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-7
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										14
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										18
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/Gh7_5p3n364p4vxeM8FhNg_48x48.png" alt="">
										<span class="ml-2 font-medium">Fullham</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										15
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										13
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										23
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-10
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr class="bg-black bg-opacity-20">
									<td class="pl-4">
										19
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/Im2UqFKvfm3TaM7R2RYkjw_48x48.png" alt="">
										<span class="ml-2 font-medium">West Brom</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										17
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										1
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										11
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										39
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-28
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										8
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
								<tr>
									<td class="pl-4">
										20
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<img class="w-5" src="https://ssl.gstatic.com/onebox/media/sports/logos/wF8AgQsssfy3_GLyVR3dSg_48x48.png" alt="">
										<span class="ml-2 font-medium">Sheffield Wednesday</span>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										18
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										1
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										2
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										15
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										9
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										29
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										-20
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										5
									</td>
									<td class="flex px-6 py-4 whitespace-nowrap">
										<svg class="w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
										</svg>
										<svg class="w-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
										</svg>
									</td>
								</tr>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Component End  -->
	
</div>
@endsection


