import cv2
import numpy as np
import matplotlib.pyplot as plt
import os
import sys

def normalize_histogram_rgb(image_path):
    # Baca citra RGB
    image = cv2.imread(image_path)
    if image is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Pisahkan ke tiga kanal warna
    channels = cv2.split(image)
    colors = ('b', 'g', 'r')
    normalized_channels = []

    # Normalisasi histogram untuk setiap kanal
    for channel, color in zip(channels, colors):
        # Hitung histogram
        hist, bins = np.histogram(channel.flatten(), 256, [0, 256])

        # Hitung fungsi distribusi kumulatif (CDF)
        cdf = hist.cumsum()
        cdf_normalized = cdf * hist.max() / cdf.max()

        # Normalisasi menggunakan CDF
        channel_normalized = np.interp(channel.flatten(), bins[:-1], cdf_normalized).reshape(channel.shape)
        normalized_channels.append(channel_normalized.astype(np.uint8))

    # Gabungkan kanal yang telah dinormalisasi
    image_normalized = cv2.merge(normalized_channels)

    # Tampilkan hasil citra sebelum dan sesudah normalisasi
    # plt.figure(figsize=(12, 6))
    # plt.subplot(1, 2, 1)
    # plt.imshow(cv2.cvtColor(image, cv2.COLOR_BGR2RGB))
    # plt.title('Original Image')
    # plt.axis('off')

    # plt.subplot(1, 2, 2)
    # plt.imshow(cv2.cvtColor(image_normalized, cv2.COLOR_BGR2RGB))
    # plt.title('Normalized Image')
    # plt.axis('off')

    plt.tight_layout()

    # Tentukan jalur output
    output_dir = 'images/input'
    os.makedirs(output_dir, exist_ok=True)
    output_path = os.path.join(output_dir, 'normalized_rgb_image.png')

    # Simpan citra yang telah dinormalisasi
    cv2.imwrite(output_path, image_normalized)

# Jalankan fungsi dengan path citra Anda
if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python histogram.py <image_path>")
    else:
        image_path = sys.argv[1]
        normalize_histogram_rgb(image_path)
