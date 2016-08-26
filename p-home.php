<?php
/*
Template Name: p-home
*/
 get_header(); ?>

<section class="gradient-con gradient-con--bk"></section>

<section class="gradient-con gradient-con--cover"></section>

<section class="reef">
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
  <div class="reef__coral"></div>
</section>

<section class="section-con section-con--intro active" id="section--1">
 <div class="section-con__copy-con centered">
   <span class="section-con__copy-con__title title">Whitewash</span>
   <span class="section-con__copy-con__copy copy">Our Great Barrier Reef is the largest living structure in the world, but it is dying. Over 90% has been damaged due to rises in temperature caused by climate change and the once vibrant coral has been drained of it’s colour, bleached white. But together we can help add some colour back, together we can make a difference.</span>
   <button class="section-con__copy-con__button button buttonNoStyle copy" type="button" id="button-intro">add some colour</button>
 </div>
</section>


<form class="whitewash-form">

  <section class="section-con section-con--form inactive" id="section--2">
    <div class="section-con__copy-con centered">
      <div class="section-con__copy-con__steps-con copy">
        <div class="section-con__copy-con__steps-con__current">
          <span>3</span>
          <span>2</span>
          <span>1</span>
        </div>
        <span class="step-divider"></span>
        <span class="step-total">3</span>
      </div>
      <div class="section-con__copy-con__title section-con__copy-con__title--form title">
        <div class="section-con__copy-con__title--form__span-con">
          <span class="section-con__copy-con__title--form__span-con__span title">I am</span>
          <span class="section-con__copy-con__title--form__span-con__span title">At</span>
          <span class="section-con__copy-con__title--form__span-con__span title">Here</span>
        </div>
      </div>
      <div class="section-con__copy-con__inputs">
        <div class="section-con__copy-con__inputs__input-con">
          <input type="text" class="section-con__copy-con__inputs__input-con__input copy form-input" placeholder="Your Name" id="name"></input>
          <input type="email" class="section-con__copy-con__inputs__input-con__input copy form-input" placeholder="Your Email" id="email" tabIndex="-1"></input>
          <input type="text" class="section-con__copy-con__inputs__input-con__input copy form-input" placeholder="Your Postcode" id="postcode" tabIndex="-1"></input>
        </div>
      </div>
      <div class="section-con__copy-con__but-con">
        <button class="section-con__copy-con__but-con__button button buttonNoStyle copy form-button form-button--name" type="button" id="button-name">next</button>
        <button class="section-con__copy-con__but-con__button button buttonNoStyle copy form-button form-button--email form-button--inactive" type="button" id="button-email">next</button>
        <button class="section-con__copy-con__but-con__button button buttonNoStyle copy form-button form-button--postcode form-button--inactive" type="button" id="button-postcode">done</button>
      </div>
    </div>
  </section>

</form>


<section class="section-con section-con--thanks inactive" id="section--3">
  <div class="section-con__copy-con centered">
    <span class="section-con__copy-con__title title">Thank you</span>
    <span class="section-con__copy-con__copy copy">Thank you so much for your support<span id="name-span" style="display:inline-block;font-weight:600"></span>! With your help we will help bring the reef back to life. Tell others about it, we need their help too.</span>
    <div class="section-con--thanks__social-con">
      <a class="section-con--thanks__social-con__icon social-con__icon social-con__icon--fb" target="_blank" href="http://www.facebook.com/share.php?u=http://whitewash.au/?p=6707"><span class="centered copy">f</span></a>
      <a class="section-con--thanks__social-con__icon social-con__icon social-con__icon--twit" target="_blank" href="https://twitter.com/intent/tweet?text=Together%20we%20can%20add%20the%20colour%20back%20to%20our%20Great%20Barrier%20Reef%2C%20sign%20the%20petition!%20&url=whitewash.au&via=CoralAlliance&hashtags=addsomecolour"><span class="centered copy">t</span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
