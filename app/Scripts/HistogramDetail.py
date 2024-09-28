import cv2
import matplotlib.pyplot as plt
import sys

def show_histogram(image_path):
    # Baca citra
    image = cv2.imread(image_path)
    if image is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Konversi citra dari BGR (OpenCV default) ke RGB
    image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

    # Pisahkan channel warna
    channels = ('r', 'g', 'b')
    colors = ('red', 'green', 'blue')
    for i, color in enumerate(colors):
        histogram = cv2.calcHist([image_rgb], [i], None, [256], [0, 256])
        plt.plot(histogram, color=color)
        plt.xlim([0, 256])

    # Tampilkan histogram
    plt.title('Histogram')
    plt.xlabel('Pixel Value')
    plt.ylabel('Frequency')
    plt.legend(channels)
    plt.show()

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python histogram.py <image_path>")
    else:
        image_path = sys.argv[1]
        show_histogram(image_path)
