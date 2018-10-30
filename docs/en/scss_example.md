By default, this module does not provide any CSS as that is usually dealt with in a global stylesheet in our projects.


Below is a sample of SCSS, designed to work with Bootstrap 4, which provides some basic layout styling for the element. 


```scss
.element.dorsetdigital__elements__imagetextelement {
  .content-element__row {
    @extend .row;

    .content-element__column {
      @extend .col;

      &.half {
        @extend .col-12;
        @extend .col-md-6;
      }

      &.third {
        @extend .col-12;
        @extend .col-md-4;
      }

      &.quarter {
        @extend .col-12;
        @extend .col-md-3;
      }

      &.sixth {
        @extend .col-12;
        @extend .col-md-2;
      }
    }

    .content-image {
      @extend .img-fluid;
    }
  }
}
```

 