<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tailwind</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="h-screen flex flex-col">
            <header class="flex flex-shrink-0">

                <div class="w-64 flex-shrink-0 bg-gray-800 px-4 py-3">
                    <button class="block w-full flex items-center">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://avatars0.githubusercontent.com/u/16211217?s=400&u=7dec66a25393bfc3c553cc69c74b40b228d0778c&v=4" alt="Profile picture">
                        <span class="text-sm text-white font-semibold ml-4 mr-2">Monica White</span>
                        <svg class="ml-auto h-5 w-5 text-gray-400 stroke-current"
                             fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </button>
                </div>

                <div class="flex w-full items-center justify-between bg-gray-700 px-6">
                    <nav>
                        <a href="#" class="text-sm text-white font-medium bg-gray-800 rounded-lg leading-relaxed inline-block px-3 py-1 ml-1 font-semibold">Mailbox</a>
                        <a href="#" class="text-sm text-white font-medium rounded-lg leading-relaxed inline-block px-3 py-1 hover:bg-gray-600 ml-1 font-semibold">Customers</a>
                        <a href="#" class="text-sm text-white font-medium rounded-lg leading-relaxed inline-block px-3 py-1 hover:bg-gray-600 ml-1 font-semibold">Reporting</a>
                        <a href="#" class="text-sm text-white font-medium rounded-lg leading-relaxed inline-block px-3 py-1 hover:bg-gray-600 ml-1 font-semibold">Manage</a>
                    </nav>

                    <div class="flex items-center">
                        <div class="relative w-64">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-500" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
                            <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                            c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                            C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                            S32.459,40,21.983,40z"/>
                            </svg>
                        </span>
                            <input class="block w-full
                        bg-gray-900
                        rounded-lg text-sm font-semibold
                        placeholder-gray-400
                        text-white pl-12 pr-4 py-2
                        focus:outline-none focus:bg-white focus:placeholder-gray-600 focus:text-gray-900" placeholder="Search">
                        </div>
                        <button class="text-gray-400 hover:text-gray-200 ml-5">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="17.-Bell">
                                    <g transform="translate(2.000000, 3.000000)" stroke="#8395A7" stroke-width="4">
                                        <path d="M1,82.6624363 C10.0657813,75.4737565 15.7929233,64.902803 15.7929233,53.117652 L15.7929233,38.411768 C15.7929233,22.1680971 30.2998277,9 48.1950012,9 C66.0901747,9 80.5970791,22.1680971 80.5970791,38.411768 L80.5970791,53.117652 C80.5970791,64.9028045 86.3242225,75.4737592 95.3899994,82.6624363" id="Layer-1"></path>
                                        <ellipse id="Layer-2" cx="48" cy="84.6" rx="48" ry="9.6"></ellipse>
                                        <path d="M59.6423952,76 C58.7027212,81.6902897 53.7598241,86.0302232 47.8032814,86.0302232 C41.9187538,86.0302232 37.0235101,81.7945959 36,76.2057913" id="Layer-3"></path>
                                        <path d="M38,10 C38,4.4771525 42.4771525,0 48,0 C53.5228475,0 58,4.4771525 58,10" id="Layer-4"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <button class="text-gray-200 hover:text-gray-400 ml-4">
                            <svg class="h-5 w-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#48A0DC;" cx="25" cy="25" r="25"/>
                                <line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="25" y1="37" x2="25" y2="39"/>
                                <path style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" d="M18,16
                            c0-3.899,3.188-7.054,7.1-6.999c3.717,0.052,6.848,3.182,6.9,6.9c0.035,2.511-1.252,4.723-3.21,5.986
                            C26.355,23.457,25,26.261,25,29.158V32"/>
                        </svg>
                        </button>
                    </div>
                </div>

            </header>

            <div class="flex overflow-hidden">
                <div class="w-64 bg-white p-6 overflow-y-auto">
                    <nav>
                        <h2 class="text-sm font-semibold text-gray-600 tracking-wide uppercase">Mailboxes</h2>
                        <div class="mt-4">
                            <a href="#" class="-mx-3 px-3 py-1 flex items-center justify-between rounded-lg bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                    <span class="text-sm text-gray-800 font-semibold ml-3">Inbox</span>
                                </span>
                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-xs text-gray-700 font-semibold">99</span>
                            </a>
                            <a href="#" class="mt-3 -mx-3 px-3 py-1 flex items-center justify-between rounded-lg hover:bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600 font-semibold ml-3">Flagged</span>
                                </span>
{{--                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-sm text-gray-700 font-medium">99</span>--}}
                            </a>
                            <a href="#" class="mt-3 -mx-3 px-3 py-1 flex items-center justify-between rounded-lg hover:bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600 font-semibold ml-3">Drafts</span>
                                </span>
{{--                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-sm text-gray-700 font-medium">99</span>--}}
                            </a>
                            <a href="#" class="mt-3 -mx-3 px-3 py-1 flex items-center justify-between rounded-lg hover:bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600 font-semibold ml-3">Assinged</span>
                                </span>
                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-xs text-gray-700 font-semibold">2</span>
                            </a>
                            <a href="#" class="mt-3 -mx-3 px-3 py-1 flex items-center justify-between rounded-lg hover:bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                    <span class="text-sm text-gray-600 font-semibold ml-3">Closed</span>
                                </span>
                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-xs text-gray-700 font-semibold">1</span>
                            </a>
                            <a href="#" class="mt-3 -mx-3 px-3 py-1 flex items-center justify-between rounded-lg hover:bg-gray-200">
                                <span class="inline-flex">
                                    <svg class="h-6 w-6 py-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
	                                <path d="M8,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S12.411,22,8,22z M8,36c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		                            S11.309,36,8,36z"/>
	                                <path d="M52,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S56.411,22,52,22z M52,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S55.309,36,52,36z"/>
	                                <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6
		                            s6,2.691,6,6S33.309,36,30,36z"/>
                                    </svg>
                                        <span class="text-sm text-gray-600 font-semibold ml-3">Junk</span>
                                </span>
{{--                                <span class="inline-block leading-none w-10 py-1 text-center rounded-full bg-gray-300 text-sm text-gray-700 font-medium">99</span>--}}
                            </a>
                        </div>
                    </nav>
                    <h2 class="mt-8 text-sm font-semibold text-gray-600 tracking-wide uppercase">Folders</h2>
                    <div class="mt-4">
                        <a href="#" class="block text-sm font-semibold text-gray-700">Refunds</a>
                        <a href="#" class="block text-sm font-semibold text-gray-700 mt-4">Discount</a>
                        <a href="#" class="block text-sm font-semibold text-gray-700 mt-4">Bugs</a>
                    </div>
                </div>
                <main class="flex-1 flex bg-gray-100">
                    <div class="flex-col w-full max-w-xs border-l border-r overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center justify-between border-b px-4 py-2">
                            <button class="flex justify-between">
                                <p class="text-xs font-semibold text-gray-600">
                                    Sorted by Date
                                </p>
                                <div class="ml-2 h-5 w-5 text-gray-500 stroke-current">
                                    <svg
                                         fill="currentColor"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </button>
                            <button>
                                <svg class="h-5 w-5 fill-current text-gray-500 stroke-current" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <rect width="512" height="32"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect y="80" width="416" height="32"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect y="160" width="320" height="32"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect y="240" width="224" height="32"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect y="320" width="160" height="32"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M427.312,164.688c-6.256-6.256-16.368-6.256-22.624,0l-48,48l22.624,22.624L400,214.624V464h32V214.624l20.688,20.688
			                                l22.624-22.624L427.312,164.688z"/>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a>
                            <a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a><a href="#" class="block bg-white px-6 pt-3 pb-4 rounded-lg border-t">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-800">
                                        Gloria Robertson
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600">
                                        2 days ago
                                    </span>
                                </div>
                                <p class="text-sm text-gray-800 font-semibold">
                                    Refund
                                </p>
                                <p class="mt-2 text-sm text-gray-600 font-semibold truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="flex-1 p-8 bg-red-500">

                    </div>
                </main>
            </div>

        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
