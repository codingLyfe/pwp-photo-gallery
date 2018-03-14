# pwp-photo-gallery
Photo Gallery to share sisters' artwork

## Milestone 1 Feedback
This is a great direction for your PWP, and we've had a number of students create wonderful art gallery projects. I do want you to be aware that these kind of projects do have some potential added challenges however.

Although a project like this has great potential for expansion, keep in mind the very narrow scope of PWP relative to an idea such as this. Also, because your PWP will be a project for an actual client, hopefully you'll have the benefit of having some real data and information available to base the design phase and content strategy on. Ideally the Persona you created would be throroughly representative of the primary target audience and market demographic for your client's/artist's website. 

Working with images can sometimes present a challenge if you're not already well versed in digital image editing or graphic design. I can help with some standards, practices, and recommendations for working with image assets when the time comes. Let's talk after Milestone 2a, when you're ready to begin development.

I also recommend limiting the number of gallery items to a number that is reasonable for a single scrolling web page. Although pagination of gallery items is an option, I'm going to advise against it at this time for reasons of potential complexity and an increase in your development time. I generally always advise in favor of simplicity for our class projects.

Nice work. I'm really looking forward to seeing this project take shape. Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Edits &amp; Suggestions
- Move your `/images` directory inside `/documentation`. This will keep your Milestone documentation images isolated from the rest of your project going forward.

## Milestone 2&alpha; Feedback
I'm really looking forward to what you create here. I do want to advise caution, as this project can quickly become time consuming and complex due to the intricacies of the UI and the number of images and accompanying content that need to be included.

How many images are you planning to feature? Will there be so many that the page length will be sufficiently long to make  sidebar navigation necessary? If not I might consider removing it. Or maybe a filter feature might be nice? (warning: this is more difficult to do) See: https://isotope.metafizzy.co/index.html

If you wanted to stick with the scrolling thumbnails instead, I'd consider using [Flickity](https://flickity.metafizzy.co) to power that. It's responsive and touch-enabled for mobile. Either way, based on the functionality you want to feature here you're looking at the integration of a couple of JavaScript tools to do the job well. Be prepared that this could present some challenges.

For the lightbox: one of my favorite JS-driven gallery plugins is [FancyBox3](http://fancyapps.com/fancybox/3/). It's touch/swipe enabled, responsive, and easy to integrate. 

Working with imagery has it's own challenges as well. I'm hoping that your artist can easily provide you with web-friendly image sets without any problems - this is important. If not, you'll have to process and export the imagery yourself. I can definitely help in that regard should you need it. 

It's ideal if you have a smaller thumbnail set alongside a full-size set, but not totally necessary. Some additional considerations when working with images:
- Keep the aspect ratios consistent across the entire image set. Both landscape and portrait images should all have the same proportions/aspect ratios between them. This will contribute to a far more professional presentation, and will also make your development easer.
- Recommended that the long axis of each image be the same dimension if possible.
- 72-96 ppi resolution for standard web applications
- Recommend max file size ~600kb. Ideally less.
- .jpeg, .png, .gif formats only for images. SVG ok for vector graphics. (No .tiff, no .bmp). jpeg format preferred for photographs.
- SEO-aware file names and good `alt` text content recommended

All-in-all this could be an awesome, beautiful, potentially complex, and possibly very time-consuming project. I'm really looking forward to seeing it come together. Err on the side of simplicity if you can, workload is only increasing from here on out. 

There's a small directory structure change that needs to be made - see Edits &amp; Suggestions below. Otherwise everything looks great. 

Build your PWP in a file named `index.php` inside `/public_html`. CSS, images, and JS directories should be siblings to `/documentation.` We won't be using the `/documentation` directory any longer.

Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development!

### Edits &amp; Suggestions
- **Move the `/images` directory inside `/documentation` so they don't get mixed up with the rest of the project. I see this fix is leftover from the Milestone One feedback! This needs to be done prior to development.**

## Final PWP Feedback
Nice work on creating a simple, attractive and functional gallery website for your sister's artwork. You've done a great job getting FancyBox up and working well with a moderately large number of images. The images are a little bit too large for standard web applications (they're all over 1MB in size), so it might lag a little on a mobile data connection, but we've talked about this stuff already - and it's not a point of primary focus here.

Your code looks great, the project is set up to spec, and the contact form looks like it's working fine.

Nice work - your final PWP Milestone passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).  Your cumulative PWP score is [32/40](https://bootcamp-coders.cnm.edu/projects/personal/rubric/#sample-score) (20/40 is passing).

- Milestone 1: Tier IV
- Milestone 2a: Tier III
- Milestone 2b: Tier III
- PWP Final: III

### Edits &amp; Suggestions
- Placing your sister's name in the image `alt` text would be good for Google image search if she's wanting to promote her work.
- Setting a fixed width & height on `.img-thumbnail` (in the CSS) might be a quick way to make the thumbnails all a consistent size - this quick approach would/could skew the thumbnail images a bit though.
- The scroll on mobile gets a bit long - I might consider adjusting that by placing the thumbnails 2 per row on small screens - this would bring the page length up a bit. This can be done with just a small change in the column classes.
- Thumbnail layout in the "Abstract" section is not centered like the others on the mobile view. This can be fixed with some simple adjustments to the bootstrap column classes in that section.
