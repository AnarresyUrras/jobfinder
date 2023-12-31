            @props(['joboffer'])
            
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <x-category-button :category="$joboffer->category" />                                
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    {{$joboffer->joboffer}}
                                </h1>
                                <div class="text-sm mt-2">
                                    <p>At {{$joboffer->company->name}} in {{$joboffer->location}}</p>
                                </div>
                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$joboffer->updated_at->diffForHumans()}}</time>
                                    </span>
                            </div>
                        </header>
                        <div>                        
                            <p class="mt-4">
                                {{$joboffer->excerpt}}     
                            </p>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold"><a href="/company/{{ $joboffer->company->slug}}">
                                        {{$joboffer->company->name}}</a></h5>
                                    <h6>in {{$joboffer->location}}</h6>
                                </div>
                            </div>
                            <div class="hidden lg:block">
                                <a href="/joboffers/{{$joboffer->slug}}"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>