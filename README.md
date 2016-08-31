# Repuation Loop Challenge

### Process:

1. Designed mockup in Balsamiq
2. Wrote simple front-end (in Brackets) using HTML5, CSS3, JQuery, and Foundation
3. Fresh Laravel install
4. Installed dependencies (only needed Guzzle for this)
5. Wrote \App\Library\Business class, which represents the business for which we're getting reviews
6. Added config file, containing API defaults
7. Wrote \App\Library\ReputationLoopApi, which is a wrapper class for the [API](http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=1&yelp=1&google=1&offset=50&threshold=1)
8. Defined web routes '/', '/reviews', and '/reviews/page/{page}'
10. Wrote controller with index which accepts page number as parameter (default == 1) and passes in data needed for pagination
11. Wrote pagination functionality in view
12. Cloned pagination links after reviews section
12. Split view into Blade template files
13. Styled app using CSS3 (data URIs for icons)

Live working copy can be viewed [here](http://bmaynard.tigrimigri.com/)
