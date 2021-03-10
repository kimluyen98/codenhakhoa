<style>
.slider_1_0_5 {
    padding-top: 140px;
}
.slider_1_0_5_slide{
    display: flex;
    overflow: hidden;
}
.slider_1_0_5 .slider_1_0_5_slide {
    display: block;
    overflow: hidden;
}
.slider_1_0_5 .disabled {
    background: none !important;
    cursor: unset !important;
}

.slider_1_0_5 .tns-outer {
    position: relative;
}

.slider_1_0_5 .tns-controls [aria-controls] {
    position: absolute;
    top: 50%;
    background: none;
    color: #ccc;
    font-size: 25px;
    padding: 5px;
}

.slider_1_0_5 .tns-controls [aria-controls]:nth-child(1) {
    left: 0;
}

.slider_1_0_5 .tns-controls [aria-controls]:nth-child(2) {
    right: 0;
}

.slider_1_0_5__item img {
    width: 100%;
    display: block;
}

/* @media (max-width: 1280px) {
    .slider_1_0_5 {
        padding-top: 166px;
    }
} */

@media (max-width: 1024px) {
    .slider_1_0_5 {
        padding-top: 90px;
    }
}

@media (max-width: 768px) {
    .slider_1_0_5 .tns-controls [aria-controls] {
        top: 35%;
    }
    .slider_1_0_5 {
        padding-top: 85px;
    }
}

@media (max-width: 414px) {
    .slider_1_0_5 {
        padding-top: 70px;
    }
}
</style>