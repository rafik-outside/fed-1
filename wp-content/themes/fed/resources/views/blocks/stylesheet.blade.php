{{--
    script[leadspace.js,banner.js,slider.js]script
    style[modules/styleguide.scss]style
    Title: Styleguide
    Description: Styleguide
    Category: Styleguide
    Icon: admin-tools
    Keywords: Styleguide
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS: styles/styleguide.css
    EnqueueAssetsJS: scripts/banner.js,scripts/slider.js
--}}
<!-- leadspace html goes here -->

@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
    @endphp

    <div class="styleguide-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="styleguide-sidebar sticky-top">
                        <ul>
                            <li class="list-group-item">
                                <a href="#branding" class="anchor-link">Branding and Colors</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#typography" class="anchor-link">Typography</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#icons" class="anchor-link">Icons</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#components" class="anchor-link">Reusable Components</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#forms" class="anchor-link">Forms</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#grids" class="anchor-link">Grid Systems</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">

                    <section class="content-wrap" id="branding">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Branding and colors</h4>
                                </header>
                                <div class="row mb-5">
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-primary d-block p-4 text-white border">
                                            <strong class="d-block">Primary</strong>
                                            <small class="mb-4 d-block">
                                                <i>$primary</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-primary</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-dark-green d-block p-4 text-white border">
                                            <strong class="d-block">Dark green</strong>
                                            <small class="mb-4 d-block">
                                                <i>$dark-green</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-dark-green</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-secondary d-block p-4 text-dark border">
                                            <strong class="d-block">Secondary</strong>
                                            <small class="mb-4 d-block">
                                                <i>$secondary</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-secondary</code>
                                        </span>
                                    </div>

                                    <div class="col-md-3 mb-5">
                                        <span class="bg-cream d-block p-4 text-dark border">
                                            <strong class="d-block">Cream</strong>
                                            <small class="mb-4 d-block">
                                                <i>$cream</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-cream</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 mb-5">
                                        <span class="bg-light-cream d-block p-4 text-dark border">
                                            <strong class="d-block">Light cream</strong>
                                            <small class="mb-4 d-block">
                                                <i>$light-cream</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-light-cream</code>
                                        </span>
                                    </div>' <div class="col-md-3 mb-5">
                                        <span class="bg-mint d-block p-4 text-dark border">
                                            <strong class="d-block">Mint</strong>
                                            <small class="mb-4 d-block">
                                                <i>$mint</i>
                                                <span class="font-size-12 d-block mb-1">#40A8F5</span>
                                            </small>
                                            <code>.bg-mint</code>
                                        </span>
                                    </div>'

                                </div>
                                <div class="row mb-10">
                                    <hr class="my-10" />
                                    <h4 class="mt-5 mb-3">Text Colors</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-white text-primary">Text Primary
                                                <code>.text-primary</code>
                                            </h6>
                                            <h6 class="p-2 pb-3 bg-white text-secondary">Text Secondary
                                                <code>.text-secondary</code>
                                            </h6>
                                            <h6 class="p-2 pb-3  text-mint bg-dark-green">Text Mint
                                                <code>.text-mint</code>
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-dark text-white">Text White <code>.text-white</code>
                                            </h6>
                                            <h6 class="p-2 pb-3 bg-light text-black">Text Black <code>.text-black</code>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="typography">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Typography</h4>
                                </header>
                                <div class="mb-8">
                                    <span class="stat">Stat</span>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 110/110</span> <span
                                            class="d-block">Tablet(md) - 88/88</span>
                                        <span class="d-block">Mobile(xs) - 80/80</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h1>h1 - Heading 1</h1>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 80/90</span> <span
                                            class="d-block">Tablet(md)
                                            - 65/73</span>
                                        <span class="d-block">Mobile(xs) - 48/56</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h2>h2 - Heading 2</h2>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 48/58</span> <span
                                            class="d-block">Tablet(md) - 44/54</span>
                                        <span class="d-block">Mobile(xs) - 40/52</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h3>h3 - Heading 3</h3>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 40/52</span> <span
                                            class="d-block">Tablet(md) - 36/44</span>
                                        <span class="d-block">Mobile(xs) - 32/40</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <h4>h4 - Heading 4</h4>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 32/40</span> <span
                                            class="d-block">Tablet(md) - 28/36</span>
                                        <span class="d-block">Mobile(xs) - 24/32</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="body-1">.body-1</span>
                                    <p class="">
                                        <span class="d-block">Desktop(xl) - 28/40</span>
                                        <span class="d-block">Mobile(xs) - 24/36</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="body-2">.body-2</span>
                                    <p class="">
                                        <span class="d-block">20/28</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="body-3">.body-3</span>
                                    <p class="">
                                        <span class="d-block"> 16/24</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="body-4">.body-4</span>
                                    <p class="">
                                        <span class="d-block">14/20</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="eyebrow-1">.eyebrow-1</span>
                                    <p class="">
                                        <span class="d-block">20/28</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="eyebrow-2">.eyebrow-2</span>
                                    <p class="">
                                        <span class="d-block">16/24</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="tag">.tag</span>
                                    <p class="">
                                        <span class="d-block">12/16</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="text-link">.text-link</span>
                                    <p class="">
                                        <span class="d-block">16/24</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="nav-link-1">.nav-link-1</span>
                                    <p class="">
                                        <span class="d-block">18/32</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="nav-link-2">.nav-link-2</span>
                                    <p class="">
                                        <span class="d-block">20/32</span>
                                    </p>
                                </div>
                                <div class="mb-8">
                                    <span class="btn-label">.button-label</span>
                                    <p class="">
                                        <span class="d-block">16/24</span>
                                    </p>
                                </div>
                                <hr class="my-10" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Inline text elements</h5>
                                        <div class="mb-6">
                                            <p class="mb-4">You can use the mark tag to <mark>highlight</mark> text.
                                            </p>
                                            <code>&lt;p&gt;You can use the mark tag to
                                                &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><s>This line of text is meant to be treated as no longer
                                                    accurate.</s></p>
                                            <code>&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no
                                                longer accurate.&lt;/s&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><u>This line of text will render as underlined</u></p>
                                            <code>&lt;p&gt;&lt;u&gt;This line of text will render as
                                                underlined&lt;/u&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><small>This line of text is meant to be treated as fine
                                                    print.</small></p>
                                            <code>&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine
                                                print.&lt;/small&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><strong>This line rendered as bold text.</strong></p>
                                            <code>&lt;p&gt;&lt;strong&gt;This line rendered as bold
                                                text.&lt;/strong&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><em>This line rendered as italicized text.</em></p>
                                            <code>&lt;p&gt;&lt;em&gt;This line rendered as italicized
                                                text.&lt;/em&gt;&lt;/p&gt;</code>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-5" />
                                <div class="">
                                    <header class="mb-5">
                                        <h3 class="mb-0">Spacing</h3>
                                    </header>
                                    <div class="row">
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:4px">
                                            </div>
                                            4px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:8px">
                                            </div>
                                            8px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:16px">
                                            </div>
                                            16px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:24px">
                                            </div>
                                            24px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:32px">
                                            </div>
                                            32px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:40px">
                                            </div>
                                            40px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:48px">
                                            </div>
                                            48px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:56px">
                                            </div>
                                            56px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:64px">
                                            </div>
                                            64px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:80px">
                                            </div>
                                            80px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:104px">
                                            </div>
                                            104px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:120px">
                                            </div>
                                            120px
                                        </div>
                                        <div class="mb-5  col-6">
                                            <div class="ratio ratio-1x1 p-1 bg-dark-green" style="width:136px">
                                            </div>
                                            136px
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="icons">
                        <div class="row">
                            <div class="col">
                                <header class="mb-5">
                                    <h3 class="mb-0">Icons</h3>
                                </header>
                                <div class="row mb-5">
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-plus font-size-30"></i>
                                        </span><code>&lt;i class="icon-plus"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-right font-size-30"></i>
                                        </span><code>&lt;i class="icon-right"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-down font-size-30"></i>
                                        </span><code>&lt;i class="icon-down"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-up font-size-30"></i>
                                        </span><code>&lt;i class="icon-up"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-left font-size-30"></i>
                                        </span><code>&lt;i class="icon-left"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-close font-size-30"></i>
                                        </span><code>&lt;i class="icon-close"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-bars font-size-30"></i>
                                        </span><code>&lt;i class="icon-bars"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-menu-open font-size-30"></i>
                                        </span><code>&lt;i class="icon-menu-open"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-youtube text-dark font-size-30"></i>
                                        </span><code>&lt;i class="icon-youtube"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i
                                                class="icon-x-twitter text-dark font-size-30"></i>
                                        </span><code>&lt;i class="icon-x-twitter"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i
                                                class="icon-linkedin text-dark font-size-30"></i>
                                        </span><code>&lt;i class="icon-linkedin"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i
                                                class="icon-right-arrow text-dark font-size-30"></i>
                                        </span><code>&lt;i class="icon-right-arrow"&gt;&lt;/i&gt;</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="components">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Reusable Components</h4>
                                </header>

                                <div class="btn-group mb-8">
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                    </div>
                                    <br>
                                    <pre class="p-0 col-12">
                                        <code>
                                            &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;Primary&lt;/button&gt;
                                        </code>
                                    </pre>
                                </div>

                                <div class="btn-group">
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <pre class="p-0 col-12 mb-2">
                                        <code>
                                            &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-primary&quot;&gt;Primary Outline&lt;/button&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div class="btn-group">
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-next">
                                            <i class="icon-right-arrow"></i>
                                        </button>
                                    <br>
                                    <pre class="p-0 col-12 mb-2">
                                        <code>
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-next&quot;&gt; &lt;i class=&quot;icon-right-arrow&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="forms">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Form Control</h4>
                                </header>

                                <div class="bg-light p-5 mb-5" style="max-width: 850px;">
                                    <div class="row mb-5">
                                        <div class="col">
                                            <form class="wpcf7-form init wpcf7-acceptance-as-validation">
                                                <div class="row">
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control"
                                                            placeholder="Name" />
                                                        <div data-lastpass-icon-root="true"
                                                            style="
                                                                position: relative !important;
                                                                height: 0px !important;
                                                                width: 0px !important;
                                                                float: left !important;
                                                            ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mb-5"><input type="text"
                                                            class="form-control" placeholder="Position" /></div>
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid"
                                                            placeholder="Organization" />
                                                    </div>
                                                    <div class="col-md-5 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid"
                                                            placeholder="Annual Operating Budget" />
                                                    </div>
                                                    <div class="col-md-5 mb-5">
                                                        <div class="custom-select">
                                                            <select aria-label="Default select example">
                                                                <option>Popular topics</option>
                                                                <option>Topic Lorem ipsum</option>
                                                                <option>Assumenda commodi, voluptates</option>
                                                                <option>Consectetur adipisicing</option>
                                                                <option>soluta provident</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 mb-5">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="col-md-10 mb-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault" />
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault">Default checkbox</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckChecked"
                                                                checked="checked" />
                                                            <label class="form-check-label"
                                                                for="flexCheckChecked">Checked checkbox</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group"><input type="submit"
                                                                class="btn btn-primary" /></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <pre class="p-0">
                                                <code>
                                                    &lt;form&nbsp;class="wpcf7-form&nbsp;init&nbsp;wpcf7-acceptance-as-validation"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="row"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Name"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Position"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="custom-select"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;select&nbsp;aria-label="Default&nbsp;select&nbsp;example"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Popular&nbsp;topics&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Topic&nbsp;Lorem&nbsp;ipsum&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Assumenda&nbsp;commodi,&nbsp;voluptates&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Consectetur&nbsp;adipisicing&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;soluta&nbsp;provident&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/select&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea&nbsp;class="form-control"&nbsp;id="exampleFormControlTextarea1"&nbsp;rows="3"&nbsp;placeholder="Message"&gt;&lt;/textarea&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="form-group"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="submit"&nbsp;class="btn&nbsp;btn-orr-blue"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&lt;/form&gt;<br>
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="grids">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Grid Information</h4>
                                </header>

                                <div class="table-responsive">
                                    <table class="table mb-4">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">
                                                    xs<br />
                                                    <span class="fw-normal">&lt;375px</span>
                                                </th>
                                                <th scope="col">
                                                    sm<br />
                                                    <span class="fw-normal">≥767</span>
                                                </th>
                                                <th scope="col">
                                                    md<br />
                                                    <span class="fw-normal">≥1024</span>
                                                </th>
                                                <th scope="col">
                                                    lg<br />
                                                    <span class="fw-normal">≥1920px</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <th class="text-nowrap" scope="row">Container <code
                                                        class="fw-normal">max-width</code></th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                                <td>1320px</td>
                                            </tr> --}}
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="6">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="6">1.5rem (.75rem on left and right)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-team fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered position-relative">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="modal-team-content position-relative w-100">
                        <figure class="position-absolute zindex-1">
                            <img src="images/vector-modal-team.svg" alt=" " />
                        </figure>
                        <button type="button" class="btn-close btn-close-modal position-absolute zindex-3"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-team-wrap position-relative zindex-2 p-20">
                            <div class="team-bio d-flex align-items-center">
                                <figure class="team-bio-author-pic ratio ratio-1x1 flex-shrink-0">
                                    <img src="images/christina-wocintechchat@2x.png" alt="Christina" />
                                </figure>
                                <div class="team-bio-info flex-grow-1 ms-13">
                                    <h5 class="team-bio-name">Lorem Ipsum Doloreros</h5>
                                    <p class="team-bio-designation mt-3">Lorem Ipsum Dolor Sit Amet Title</p>
                                    <div class="post-restricted mt-6">
                                        <p>
                                            <a href="#">Lorem Ipsum Project Title Amet Consectetur Adipiscing
                                                Elit Sed Eget Leo
                                                Vehicula Tempor Justo Sed. [15]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="team-description mt-16">
                                <div class="post-restricted">
                                    <p>
                                        <b>Lorem</b> ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
                                        pulvinar
                                        ipsum, a condimentum enim. Aliquam accumsan gravida nulla, a rutrum ex malesuada
                                        quis. Sed condimentum orci eu facilisis accumsan. Etiam massa turpis, placerat
                                        nec
                                        nunc vel, porta ullamcorper sem. Donec pharetra nulla id nibh convallis mattis.
                                        Maecenas at fringilla ligula.
                                    </p>
                                    <p>
                                        Praesent in nulla ac ligula interdum feugiat suscipit at dui. Donec non neque
                                        vehicula, bibendum felis ac, semper sapien. Cras dapibus risus sed gravida
                                        laoreet.
                                        Cras id nisi tincidunt, tincidunt massa vitae, tristique nisl. Mauris commodo
                                        non
                                        arcu ac sollicitudin. Aliquam quis lorem vulputate felis dapibus tempus ut
                                        fermentum. [100]
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
